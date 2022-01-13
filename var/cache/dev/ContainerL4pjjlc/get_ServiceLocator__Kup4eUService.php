<?php

namespace ContainerL4pjjlc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__Kup4eUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..kup4eU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..kup4eU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'recipe' => ['privates', '.errored..service_locator..kup4eU.App\\Entity\\Recipe', NULL, 'Cannot autowire service ".service_locator..kup4eU": it references class "App\\Entity\\Recipe" but no such service exists.'],
            'repo' => ['privates', 'App\\Repository\\RecipeLikeRepository', 'getRecipeLikeRepositoryService', true],
        ], [
            'manager' => '?',
            'recipe' => 'App\\Entity\\Recipe',
            'repo' => 'App\\Repository\\RecipeLikeRepository',
        ]);
    }
}
