<?php

namespace App\Controller;

use App\Entity\Recipe;
use App\Entity\RecipeLike;
use App\Form\RecipeType;
use App\Repository\IngredientRepository;
use App\Repository\RecipeLikeRepository;
use App\Repository\RecipeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/mon-compte", name="user_")
 * @IsGranted("ROLE_USER")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/", name="my_account")
     */
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @Route("/mes-recettes", name="owner_recipes", methods={"GET"})
     */
    public function showOwnerRecipes(RecipeRepository $repo): Response
    {
        $recipes = $repo->findBy(['author' => $this->getUser()]);
        return $this->render('public/list.html.twig', [
            'title' => 'Mes recettes',
            'recipes' => $recipes
        ]);
    }

    /**
     * @Route("/mes-favoris", name="liked_recipes", methods={"GET"})
     */
    public function showLikedRecipes(RecipeLikeRepository $likeRepo, RecipeRepository $recipeRepo): Response
    {
        $recipelikes = $likeRepo->findBy(['user' => $this->getUser()]);
        $array = [];

        foreach ($recipelikes as $recipelike) {
            $array[] = $recipelike->getRecipe()->getId();
        }
        $recipes = $recipeRepo->findBy(['id' => $array]);

        return $this->render('public/list.html.twig', [
            'title' => 'Mes recettes favorites',
            'recipes' => $recipes
        ]);
    }

    /**
     * @Route("/nouvelle-recette", name="recipe_add", methods={"GET", "POST"})
     */
    public function create(Request $request, EntityManagerInterface $manager): Response
    {
        $recipe = new Recipe();

        $form = $this->createForm(RecipeType::class, $recipe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $recipe->setCreatedAt(new \DateTime());
            $recipe->setAuthor($this->getUser());
            $manager->persist($recipe);
            $manager->flush();
            $this->addFlash('success', 'Recette créée avec succès');
            return $this->redirectToRoute('recipe_show', [
                'slug' => $recipe->getSlug()
            ]);
        }

        return $this->render('user/create.html.twig', [
            'title' => 'Ajouter une recette',
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/{slug}/modifier", name="recipe_update", methods={"GET", "POST"})
     */
    public function update(Request $request, EntityManagerInterface $manager, Recipe $recipe): Response
    {

        $form = $this->createForm(RecipeType::class, $recipe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //$manager->persist($recipe);
            $manager->flush();
            $this->addFlash('success', 'Recette modifiée avec succès');
            return $this->redirectToRoute('recipe_show', [
                'slug' => $recipe->getSlug()
            ]);
        }

        return $this->render('user/update.html.twig', [
            'title' => "Modification de la recette",
            'recipe' => $recipe,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/recette/supprimer/{id}", name="recipe_delete", methods={"POST"})
     */
    public function deleteRecipe(Recipe $recipe, Request $request, EntityManagerInterface $manager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $recipe->getId(), $request->request->get('_token'))) {
            $manager->remove($recipe);
            $manager->flush();
            $this->addFlash('success', 'Recette supprimée avec succès');
        }

        return $this->redirectToRoute('user_owner_recipes', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/recipe/{id}/like", name="recipe_like", methods={"GET", "POST"})
     */
    public function like(Recipe $recipe, EntityManagerInterface $manager, RecipeLikeRepository $repo): Response
    {
        $user = $this->getUser();

        // Utilisateur non connecté
        if (!$user) return $this->json([
            'code' => 403,
            'message' => 'Unauthorized'
        ], 403);

        if ($recipe->isLikedByUser($user)) {
            $like = $repo->findOneBy([
                'recipe' => $recipe,
                'user' => $user
            ]);
            $manager->remove($like);
            $manager->flush();

            return $this->json([
                'code' => 200,
                'message' => 'Like bien supprimé',
            ], 200);
        }

        $like = new RecipeLike();
        $like->setRecipe($recipe)
            ->setUser($user);
        $manager->persist($like);
        $manager->flush();

        return $this->json([
            'code' => 200,
            'message' => 'like bien ajouté',
        ], 200);
    }
}
