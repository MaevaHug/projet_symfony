<?php

namespace ContainerL4pjjlc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CCzGKB2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CCzGKB2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CCzGKB2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'unity' => ['privates', '.errored..service_locator.CCzGKB2.App\\Entity\\Unity', NULL, 'Cannot autowire service ".service_locator.CCzGKB2": it references class "App\\Entity\\Unity" but no such service exists.'],
        ], [
            'manager' => '?',
            'unity' => 'App\\Entity\\Unity',
        ]);
    }
}
