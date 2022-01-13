<?php

namespace ContainerL4pjjlc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9L0ZdzRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9L0ZdzR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9L0ZdzR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'unity' => ['privates', '.errored..service_locator.9L0ZdzR.App\\Entity\\Unity', NULL, 'Cannot autowire service ".service_locator.9L0ZdzR": it references class "App\\Entity\\Unity" but no such service exists.'],
            'unityRepository' => ['privates', 'App\\Repository\\UnityRepository', 'getUnityRepositoryService', true],
        ], [
            'manager' => '?',
            'unity' => 'App\\Entity\\Unity',
            'unityRepository' => 'App\\Repository\\UnityRepository',
        ]);
    }
}
