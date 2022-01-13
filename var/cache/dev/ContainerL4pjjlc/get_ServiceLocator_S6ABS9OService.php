<?php

namespace ContainerL4pjjlc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_S6ABS9OService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.S6ABS9O' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.S6ABS9O'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::addCategory' => ['privates', '.service_locator.jTzQr3w', 'get_ServiceLocator_JTzQr3wService', true],
            'App\\Controller\\AdminController::addIngredient' => ['privates', '.service_locator.cPXQ7Ll', 'get_ServiceLocator_CPXQ7LlService', true],
            'App\\Controller\\AdminController::addUnity' => ['privates', '.service_locator.0KxPdQ1', 'get_ServiceLocator_0KxPdQ1Service', true],
            'App\\Controller\\AdminController::categoriesList' => ['privates', '.service_locator.uCSWYWR', 'get_ServiceLocator_UCSWYWRService', true],
            'App\\Controller\\AdminController::deleteCategory' => ['privates', '.service_locator.dY4.KUx', 'get_ServiceLocator_DY4_KUxService', true],
            'App\\Controller\\AdminController::deleteIngredient' => ['privates', '.service_locator.wLagm0x', 'get_ServiceLocator_WLagm0xService', true],
            'App\\Controller\\AdminController::deleteRecipe' => ['privates', '.service_locator.lAsACsj', 'get_ServiceLocator_LAsACsjService', true],
            'App\\Controller\\AdminController::deleteUnity' => ['privates', '.service_locator.CCzGKB2', 'get_ServiceLocator_CCzGKB2Service', true],
            'App\\Controller\\AdminController::deleteUser' => ['privates', '.service_locator.cdptobR', 'get_ServiceLocator_CdptobRService', true],
            'App\\Controller\\AdminController::editCategory' => ['privates', '.service_locator.b03b4QZ', 'get_ServiceLocator_B03b4QZService', true],
            'App\\Controller\\AdminController::editIngredient' => ['privates', '.service_locator.1mWSjJD', 'get_ServiceLocator_1mWSjJDService', true],
            'App\\Controller\\AdminController::editUnity' => ['privates', '.service_locator.9L0ZdzR', 'get_ServiceLocator_9L0ZdzRService', true],
            'App\\Controller\\AdminController::editUser' => ['privates', '.service_locator.cqCaVwT', 'get_ServiceLocator_CqCaVwTService', true],
            'App\\Controller\\AdminController::ingredientsList' => ['privates', '.service_locator.Zsvo0C1', 'get_ServiceLocator_Zsvo0C1Service', true],
            'App\\Controller\\AdminController::recipesList' => ['privates', '.service_locator.EKooU3W', 'get_ServiceLocator_EKooU3WService', true],
            'App\\Controller\\AdminController::unitiesList' => ['privates', '.service_locator.Co9UdPW', 'get_ServiceLocator_Co9UdPWService', true],
            'App\\Controller\\AdminController::usersList' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\PublicController::categoryList' => ['privates', '.service_locator.Ndw0NZG', 'get_ServiceLocator_Ndw0NZGService', true],
            'App\\Controller\\PublicController::recipeList' => ['privates', '.service_locator.EKooU3W', 'get_ServiceLocator_EKooU3WService', true],
            'App\\Controller\\PublicController::recipeListByFilter' => ['privates', '.service_locator.tFyRBWl', 'get_ServiceLocator_TFyRBWlService', true],
            'App\\Controller\\PublicController::showOneRecipe' => ['privates', '.service_locator.c77AWLP', 'get_ServiceLocator_C77AWLPService', true],
            'App\\Controller\\PublicController::showRecipeByCategory' => ['privates', '.service_locator.NkUuuMg', 'get_ServiceLocator_NkUuuMgService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.d2me_LS', 'get_ServiceLocator_D2meLSService', true],
            'App\\Controller\\SecurityController::registration' => ['privates', '.service_locator.8pd0Hyp', 'get_ServiceLocator_8pd0HypService', true],
            'App\\Controller\\UserController::create' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\UserController::deleteRecipe' => ['privates', '.service_locator.lAsACsj', 'get_ServiceLocator_LAsACsjService', true],
            'App\\Controller\\UserController::like' => ['privates', '.service_locator..kup4eU', 'get_ServiceLocator__Kup4eUService', true],
            'App\\Controller\\UserController::showLikedRecipes' => ['privates', '.service_locator.bGZQc2Y', 'get_ServiceLocator_BGZQc2YService', true],
            'App\\Controller\\UserController::showOwnerRecipes' => ['privates', '.service_locator.wGqHf5Q', 'get_ServiceLocator_WGqHf5QService', true],
            'App\\Controller\\UserController::update' => ['privates', '.service_locator.lAsACsj', 'get_ServiceLocator_LAsACsjService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AdminController:addCategory' => ['privates', '.service_locator.jTzQr3w', 'get_ServiceLocator_JTzQr3wService', true],
            'App\\Controller\\AdminController:addIngredient' => ['privates', '.service_locator.cPXQ7Ll', 'get_ServiceLocator_CPXQ7LlService', true],
            'App\\Controller\\AdminController:addUnity' => ['privates', '.service_locator.0KxPdQ1', 'get_ServiceLocator_0KxPdQ1Service', true],
            'App\\Controller\\AdminController:categoriesList' => ['privates', '.service_locator.uCSWYWR', 'get_ServiceLocator_UCSWYWRService', true],
            'App\\Controller\\AdminController:deleteCategory' => ['privates', '.service_locator.dY4.KUx', 'get_ServiceLocator_DY4_KUxService', true],
            'App\\Controller\\AdminController:deleteIngredient' => ['privates', '.service_locator.wLagm0x', 'get_ServiceLocator_WLagm0xService', true],
            'App\\Controller\\AdminController:deleteRecipe' => ['privates', '.service_locator.lAsACsj', 'get_ServiceLocator_LAsACsjService', true],
            'App\\Controller\\AdminController:deleteUnity' => ['privates', '.service_locator.CCzGKB2', 'get_ServiceLocator_CCzGKB2Service', true],
            'App\\Controller\\AdminController:deleteUser' => ['privates', '.service_locator.cdptobR', 'get_ServiceLocator_CdptobRService', true],
            'App\\Controller\\AdminController:editCategory' => ['privates', '.service_locator.b03b4QZ', 'get_ServiceLocator_B03b4QZService', true],
            'App\\Controller\\AdminController:editIngredient' => ['privates', '.service_locator.1mWSjJD', 'get_ServiceLocator_1mWSjJDService', true],
            'App\\Controller\\AdminController:editUnity' => ['privates', '.service_locator.9L0ZdzR', 'get_ServiceLocator_9L0ZdzRService', true],
            'App\\Controller\\AdminController:editUser' => ['privates', '.service_locator.cqCaVwT', 'get_ServiceLocator_CqCaVwTService', true],
            'App\\Controller\\AdminController:ingredientsList' => ['privates', '.service_locator.Zsvo0C1', 'get_ServiceLocator_Zsvo0C1Service', true],
            'App\\Controller\\AdminController:recipesList' => ['privates', '.service_locator.EKooU3W', 'get_ServiceLocator_EKooU3WService', true],
            'App\\Controller\\AdminController:unitiesList' => ['privates', '.service_locator.Co9UdPW', 'get_ServiceLocator_Co9UdPWService', true],
            'App\\Controller\\AdminController:usersList' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\PublicController:categoryList' => ['privates', '.service_locator.Ndw0NZG', 'get_ServiceLocator_Ndw0NZGService', true],
            'App\\Controller\\PublicController:recipeList' => ['privates', '.service_locator.EKooU3W', 'get_ServiceLocator_EKooU3WService', true],
            'App\\Controller\\PublicController:recipeListByFilter' => ['privates', '.service_locator.tFyRBWl', 'get_ServiceLocator_TFyRBWlService', true],
            'App\\Controller\\PublicController:showOneRecipe' => ['privates', '.service_locator.c77AWLP', 'get_ServiceLocator_C77AWLPService', true],
            'App\\Controller\\PublicController:showRecipeByCategory' => ['privates', '.service_locator.NkUuuMg', 'get_ServiceLocator_NkUuuMgService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.d2me_LS', 'get_ServiceLocator_D2meLSService', true],
            'App\\Controller\\SecurityController:registration' => ['privates', '.service_locator.8pd0Hyp', 'get_ServiceLocator_8pd0HypService', true],
            'App\\Controller\\UserController:create' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\UserController:deleteRecipe' => ['privates', '.service_locator.lAsACsj', 'get_ServiceLocator_LAsACsjService', true],
            'App\\Controller\\UserController:like' => ['privates', '.service_locator..kup4eU', 'get_ServiceLocator__Kup4eUService', true],
            'App\\Controller\\UserController:showLikedRecipes' => ['privates', '.service_locator.bGZQc2Y', 'get_ServiceLocator_BGZQc2YService', true],
            'App\\Controller\\UserController:showOwnerRecipes' => ['privates', '.service_locator.wGqHf5Q', 'get_ServiceLocator_WGqHf5QService', true],
            'App\\Controller\\UserController:update' => ['privates', '.service_locator.lAsACsj', 'get_ServiceLocator_LAsACsjService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AdminController::addCategory' => '?',
            'App\\Controller\\AdminController::addIngredient' => '?',
            'App\\Controller\\AdminController::addUnity' => '?',
            'App\\Controller\\AdminController::categoriesList' => '?',
            'App\\Controller\\AdminController::deleteCategory' => '?',
            'App\\Controller\\AdminController::deleteIngredient' => '?',
            'App\\Controller\\AdminController::deleteRecipe' => '?',
            'App\\Controller\\AdminController::deleteUnity' => '?',
            'App\\Controller\\AdminController::deleteUser' => '?',
            'App\\Controller\\AdminController::editCategory' => '?',
            'App\\Controller\\AdminController::editIngredient' => '?',
            'App\\Controller\\AdminController::editUnity' => '?',
            'App\\Controller\\AdminController::editUser' => '?',
            'App\\Controller\\AdminController::ingredientsList' => '?',
            'App\\Controller\\AdminController::recipesList' => '?',
            'App\\Controller\\AdminController::unitiesList' => '?',
            'App\\Controller\\AdminController::usersList' => '?',
            'App\\Controller\\PublicController::categoryList' => '?',
            'App\\Controller\\PublicController::recipeList' => '?',
            'App\\Controller\\PublicController::recipeListByFilter' => '?',
            'App\\Controller\\PublicController::showOneRecipe' => '?',
            'App\\Controller\\PublicController::showRecipeByCategory' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::registration' => '?',
            'App\\Controller\\UserController::create' => '?',
            'App\\Controller\\UserController::deleteRecipe' => '?',
            'App\\Controller\\UserController::like' => '?',
            'App\\Controller\\UserController::showLikedRecipes' => '?',
            'App\\Controller\\UserController::showOwnerRecipes' => '?',
            'App\\Controller\\UserController::update' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdminController:addCategory' => '?',
            'App\\Controller\\AdminController:addIngredient' => '?',
            'App\\Controller\\AdminController:addUnity' => '?',
            'App\\Controller\\AdminController:categoriesList' => '?',
            'App\\Controller\\AdminController:deleteCategory' => '?',
            'App\\Controller\\AdminController:deleteIngredient' => '?',
            'App\\Controller\\AdminController:deleteRecipe' => '?',
            'App\\Controller\\AdminController:deleteUnity' => '?',
            'App\\Controller\\AdminController:deleteUser' => '?',
            'App\\Controller\\AdminController:editCategory' => '?',
            'App\\Controller\\AdminController:editIngredient' => '?',
            'App\\Controller\\AdminController:editUnity' => '?',
            'App\\Controller\\AdminController:editUser' => '?',
            'App\\Controller\\AdminController:ingredientsList' => '?',
            'App\\Controller\\AdminController:recipesList' => '?',
            'App\\Controller\\AdminController:unitiesList' => '?',
            'App\\Controller\\AdminController:usersList' => '?',
            'App\\Controller\\PublicController:categoryList' => '?',
            'App\\Controller\\PublicController:recipeList' => '?',
            'App\\Controller\\PublicController:recipeListByFilter' => '?',
            'App\\Controller\\PublicController:showOneRecipe' => '?',
            'App\\Controller\\PublicController:showRecipeByCategory' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:registration' => '?',
            'App\\Controller\\UserController:create' => '?',
            'App\\Controller\\UserController:deleteRecipe' => '?',
            'App\\Controller\\UserController:like' => '?',
            'App\\Controller\\UserController:showLikedRecipes' => '?',
            'App\\Controller\\UserController:showOwnerRecipes' => '?',
            'App\\Controller\\UserController:update' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}