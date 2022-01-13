<?php

namespace App\Controller;



use App\Form\RecipeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Recipe;
use App\Entity\RecipeLike;
use App\Entity\Category;
use App\Entity\User;
use App\Form\SearchRecipeType;
use App\Repository\RecipeLikeRepository;
use App\Repository\RecipeRepository;
use App\Repository\CategoryRepository;
use App\Repository\IngredientLineRepository;
use App\Repository\IngredientRepository;
use App\Repository\StepLineRepository;

class PublicController extends AbstractController
{
    /**
     * @Route("/", name="home", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('public/home.html.twig', [
            'title' => 'Mon Site de Recettes',
        ]);
    }

    /**
     * @Route("/recettes", name="recipe_list", methods={"GET"})
     */
    public function recipeList(RecipeRepository $recipeRepository, Request $request): Response
    {
        // On définit le nombre d'éléments par page
        $limit = 6;

        // On récupère le numéro de page
        $page = (int)$request->query->get("page", 1);

        // On récupère l'utilisateur connecté
        $user = $this->getUser();

        // On récupère les recettes de la page
        $recipes = $recipeRepository->findAllWithPagination($page, $limit, $user);

        // Nombre total de recettes
        $total = $recipeRepository->getTotalRecipe($user);

        //$recipes = $repo->findAll();
        return $this->render('public/list.html.twig', [
            'title' => 'Toutes les recettes',
            'total' => $total,
            'limit' => $limit,
            'page' => $page,
            'recipes' => $recipes,
        ]);
    }

    /**
     * @Route("/recherche", name="recipe_search", methods={"GET"})
     */
    public function recipeListByFilter(RecipeRepository $recipeRepository, IngredientRepository $ingredientRepository, Request $request): Response
    {
        // On définit le nombre d'éléments par page
        $limit = 6;

        // On récupère le numéro de page
        $page = (int)$request->query->get("page", 1);

        // On récupère l'utilisateur connecté
        $user = $this->getUser();

        // on récupère le filtre
        $filter = $request->query->get('f');

        // On vérifie si le filtre correspond à un ingrédient
        if ($ingredientRepository->findOneByFilter($filter) != null) {
            $isIngredient = true;
        } else {
            $isIngredient = false;
        }

        // On récupère les recettes de la page
        $recipes = $recipeRepository->findAllWithPagination($page, $limit, $user, $filter, $isIngredient);

        // Nombre total de recettes
        $total = $recipeRepository->getTotalRecipe($user, $filter, $isIngredient);

        // test url
        $url = $this->generateUrl('recipe_search', 
                [ 'f' => $filter,
                'page' => $page
    ]);

        //$recipes = $repo->findAll();
        return $this->render('public/list.html.twig', [
            'title' => 'Résultat(s) pour : ',
            'filter' => $filter,
            'total' => $total,
            'limit' => $limit,
            'page' => $page,
            'recipes' => $recipes,
        ]);
    }

    /**
     * @Route("/categories", name="category_list", methods={"GET"})
     */
    public function categoryList(CategoryRepository $repo): Response
    {
        $categories = $repo->findAll();
        return $this->render('public/categoryList.html.twig', [
            'title' => 'Toutes les catégories',
            'categories' => $categories
        ]);
    }

    /**
     * @Route("/categorie/{slug}", name="category_show", methods={"GET"})
     */
    public function showRecipeByCategory(Category $category, RecipeRepository $repo): Response
    {
        $recipes = $repo->findBy(['category' => $category->getId()]);
        return $this->render('public/list.html.twig', [
            'title' => $category->getName(),
            'recipes' => $recipes
        ]);
    }

    /**
     * @Route("/recette/{slug}", name="recipe_show", methods={"GET"})
     */
    public function showOneRecipe(Recipe $recipe, IngredientLineRepository $ingredientLineRepository, StepLineRepository $stepLineRepository): Response
    {
        $ingredientLines = $ingredientLineRepository->findBy(['recipe' => $recipe->getId()]);
        $stepLines = $stepLineRepository->findBy(['recipe' => $recipe->getId()]);
        $category = $recipe->getCategory();

        return $this->render('public/show.html.twig', [
            'element' => 'ownerRecipe',
            'deleteMsg' => 'Êtes-vous sûr de vouloir supprimer cette recette ?',
            'recipe' => $recipe,
            'ingredientLines' => $ingredientLines,
            'stepLines' => $stepLines,
            'category' => $category
        ]);
    }
}
