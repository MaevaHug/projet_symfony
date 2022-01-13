<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Ingredient;
use App\Entity\Recipe;
use App\Entity\Unity;
use App\Entity\User;
use App\Form\CategoryType;
use App\Form\UserType;
use App\Form\IngredientType;
use App\Form\UnityType;
use App\Repository\CategoryRepository;
use App\Repository\IngredientRepository;
use App\Repository\RecipeRepository;
use App\Repository\UnityRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/admin", name="admin_")
 *  @IsGranted("ROLE_ADMIN")
 */
class AdminController extends AbstractController
{

    /**
     * @Route("/utilisateurs", name="users", methods={"GET"})
     */
    public function usersList(UserRepository $userRepository): Response
    {
        return $this->render('admin/users.html.twig', [
            'title' => 'Liste des utilisateurs',
            'deleteMsg' => 'Êtes-vous sûr de vouloir supprimer cet utilisateur ? Toutes les recettes associées seront supprimées',
            'element' => 'user',
            'elements' => 'users',
            'users' => $userRepository->findAll()
        ]);
    }

    /**
     * @Route("/utilisateur/modifier/{id}", name="user_edit", methods={"GET", "POST"})
     */
    public function editUser(User $user, Request $request, UserRepository $userRepository, EntityManagerInterface $manager): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($user);
            $manager->flush();

            $this->addFlash('success', 'Utilisateur modifié avec succès');

            return $this->redirectToRoute('admin_users');
        }

        return $this->render('admin/users.html.twig', [
            'title' => 'Liste des utilisateurs',
            'users' => $userRepository->findAll(),
            'user_edit' => $user->getId(),
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/utilisateur/supprimer/{id}", name="user_delete", methods={"POST"})
     */
    public function deleteUser(Request $request, User $user, EntityManagerInterface $manager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $manager->remove($user);
            $manager->flush();
            $this->addFlash('success', 'Utilisateur supprimé avec succès');
        }

        return $this->redirectToRoute('admin_users', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/ingredients", name="ingredients", methods={"GET"})
     */
    public function ingredientsList(IngredientRepository $ingredientRepository): Response
    {
        return $this->render('admin/ingredients.html.twig', [
            'title' => 'Liste des ingrédients',
            'deleteMsg' => 'Êtes-vous sûr de vouloir supprimer cet ingrédient ?',
            'element' => 'ingredient',
            'ingredients' => $ingredientRepository->findAll()
        ]);
    }

    /**
     * @Route("/ingredient/modifier/{id}", name="ingredient_edit", methods={"GET", "POST"})
     */
    public function editIngredient(Ingredient $ingredient, IngredientRepository $ingredientRepository, Request $request, EntityManagerInterface $manager): Response
    {
        $form = $this->createForm(IngredientType::class, $ingredient);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($ingredient);
            $manager->flush();

            $this->addFlash('success', 'Ingrédient modifié avec succès');

            return $this->redirectToRoute('admin_ingredients');
        }

        return $this->render('admin/ingredients.html.twig', [
            'title' => 'Liste des ingrédients',
            'ingredients' => $ingredientRepository->findAll(),
            'ingredient_edit' => $ingredient->getId(),
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/ingredient/supprimer/{id}", name="ingredient_delete", methods={"POST"})
     */
    public function deleteIngredient(Request $request, Ingredient $ingredient, EntityManagerInterface $manager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $ingredient->getId(), $request->request->get('_token'))) {
            $manager->remove($ingredient);
            $manager->flush();
            $this->addFlash('success', 'Ingrédient supprimé avec succès');
        }

        return $this->redirectToRoute('admin_ingredients', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/ingredient/ajouter", name="ingredient_add", methods={"GET", "POST"})
     */
    public function addIngredient(Request $request, EntityManagerInterface $manager, IngredientRepository $ingredientRepository): Response
    {
        $ingredient = new Ingredient();
        $form = $this->createForm(IngredientType::class, $ingredient);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($ingredient);
            $manager->flush();
            $this->addFlash('success', 'Ingrédient ajouté avec succès');
            return $this->redirectToRoute('admin_ingredients');
        }

        return $this->render('admin/ingredients.html.twig', [
            'title' => 'Liste des ingrédients',
            'ingredients' => $ingredientRepository->findAll(),
            'form' => $form->createView(),
            'action' => 'new'
        ]);
    }

    /**
     * @Route("/categories", name="categories", methods={"GET"})
     */
    public function categoriesList(CategoryRepository $categoryRepository): Response
    {
        return $this->render('admin/categories.html.twig', [
            'title' => 'Liste des catégories',
            'deleteMsg' => 'Êtes-vous sûr de vouloir supprimer cette catégorie ?',
            'element' => 'category',
            'categories' => $categoryRepository->findAll()
        ]);
    }

    /**
     * @Route("/categorie/modifier/{id}", name="category_edit", methods={"GET", "POST"})
     */
    public function editCategory(Category $category, CategoryRepository $categoryRepository, Request $request, EntityManagerInterface $manager): Response
    {
        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($category);
            $manager->flush();

            $this->addFlash('success', 'Catégorie modifiée avec succès');

            return $this->redirectToRoute('admin_ingredients');
        }

        return $this->render('admin/ingredients.html.twig', [
            'title' => 'Liste des ingrédients',
            'categories' => $categoryRepository->findAll(),
            'category_edit' => $category->getId(),
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/categorie/supprimer/{id}", name="category_delete", methods={"POST"})
     */
    public function deleteCategory(Request $request, Category $category, EntityManagerInterface $manager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $category->getId(), $request->request->get('_token'))) {
            $manager->remove($category);
            $manager->flush();
            $this->addFlash('success', 'Catégorie supprimée avec succès');
        }

        return $this->redirectToRoute('admin_categories', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/categorie/ajouter", name="category_add", methods={"GET", "POST"})
     */
    public function addCategory(Request $request, EntityManagerInterface $manager, CategoryRepository $categoryRepository): Response
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($category);
            $manager->flush();
            $this->addFlash('success', 'Catégorie ajoutée avec succès');
            return $this->redirectToRoute('admin_categories');
        }

        return $this->render('admin/categories.html.twig', [
            'title' => 'Liste des catégories',
            'categories' => $categoryRepository->findAll(),
            'form' => $form->createView(),
            'action' => 'new'
        ]);
    }

    /**
     * @Route("/unites", name="unities", methods={"GET"})
     */
    public function unitiesList(UnityRepository $unityRepository): Response
    {
        return $this->render('admin/unities.html.twig', [
            'title' => 'Unités de mesure',
            'deleteMsg' => 'Êtes-vous sûr de vouloir supprimer cette unité ?',
            'element' => 'unity',
            'unities' => $unityRepository->findAll()
        ]);
    }

    /**
     * @Route("/unite/modifier/{id}", name="unity_edit", methods={"GET", "POST"})
     */
    public function editUnity(Unity $unity, UnityRepository $unityRepository, Request $request, EntityManagerInterface $manager): Response
    {
        $form = $this->createForm(UnityType::class, $unity);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($unity);
            $manager->flush();

            $this->addFlash('success', 'Unité modifiée avec succès');

            return $this->redirectToRoute('admin_unities');
        }

        return $this->render('admin/unities.html.twig', [
            'title' => 'Unités de mesure',
            'unities' => $unityRepository->findAll(),
            'unity_edit' => $unity->getId(),
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/unite/supprimer/{id}", name="unity_delete", methods={"POST"})
     */
    public function deleteUnity(Unity $unity, Request $request, EntityManagerInterface $manager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $unity->getId(), $request->request->get('_token'))) {
            $manager->remove($unity);
            $manager->flush();
            $this->addFlash('success', 'Unité supprimée avec succès');
        }

        return $this->redirectToRoute('admin_unities', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/unite/ajouter", name="unity_add", methods={"GET", "POST"})
     */
    public function addUnity(Request $request, EntityManagerInterface $manager, UnityRepository $unityRepository): Response
    {
        $unity = new Unity();
        $form = $this->createForm(UnityType::class, $unity);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($unity);
            $manager->flush();
            $this->addFlash('success', 'Unité de mesure ajoutée avec succès');
            return $this->redirectToRoute('admin_unities');
        }

        return $this->render('admin/unities.html.twig', [
            'title' => 'Unités de mesure',
            'unities' => $unityRepository->findAll(),
            'form' => $form->createView(),
            'action' => 'new'
        ]);
    }

    /**
     * @Route("/recettes", name="recipes", methods={"GET"})
     */
    public function recipesList(RecipeRepository $recipeRepository): Response
    {
        return $this->render('admin/recipes.html.twig', [
            'title' => 'Liste des recettes',
            'deleteMsg' => 'Êtes-vous sûr de vouloir supprimer cette recette ?',
            'element' => 'recipe',
            'recipes' => $recipeRepository->findAll()
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

        return $this->redirectToRoute('admin_recipes', [], Response::HTTP_SEE_OTHER);
    }
}
