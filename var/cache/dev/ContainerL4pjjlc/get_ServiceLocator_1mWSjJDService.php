<?php

namespace ContainerL4pjjlc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1mWSjJDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1mWSjJD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1mWSjJD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ingredient' => ['privates', '.errored..service_locator.1mWSjJD.App\\Entity\\Ingredient', NULL, 'Cannot autowire service ".service_locator.1mWSjJD": it references class "App\\Entity\\Ingredient" but no such service exists.'],
            'ingredientRepository' => ['privates', 'App\\Repository\\IngredientRepository', 'getIngredientRepositoryService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'ingredient' => 'App\\Entity\\Ingredient',
            'ingredientRepository' => 'App\\Repository\\IngredientRepository',
            'manager' => '?',
        ]);
    }
}
