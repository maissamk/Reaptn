<?php

namespace ContainerOiRB478;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WZGs69iService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wZGs69i' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wZGs69i'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'materielvente' => ['privates', '.errored..service_locator.wZGs69i.App\\Entity\\Materielvente', NULL, 'Cannot autowire service ".service_locator.wZGs69i": it needs an instance of "App\\Entity\\Materielvente" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'materielvente' => 'App\\Entity\\Materielvente',
        ]);
    }
}
