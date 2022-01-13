<?php

namespace ContainerL4pjjlc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WLagm0xService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wLagm0x' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wLagm0x'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ingredient' => ['privates', '.errored..service_locator.wLagm0x.App\\Entity\\Ingredient', NULL, 'Cannot autowire service ".service_locator.wLagm0x": it references class "App\\Entity\\Ingredient" but no such service exists.'],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'ingredient' => 'App\\Entity\\Ingredient',
            'manager' => '?',
        ]);
    }
}
