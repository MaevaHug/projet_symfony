<?php

namespace ContainerL4pjjlc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NkUuuMgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NkUuuMg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NkUuuMg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'category' => ['privates', '.errored..service_locator.NkUuuMg.App\\Entity\\Category', NULL, 'Cannot autowire service ".service_locator.NkUuuMg": it references class "App\\Entity\\Category" but no such service exists.'],
            'repo' => ['privates', 'App\\Repository\\RecipeRepository', 'getRecipeRepositoryService', true],
        ], [
            'category' => 'App\\Entity\\Category',
            'repo' => 'App\\Repository\\RecipeRepository',
        ]);
    }
}
