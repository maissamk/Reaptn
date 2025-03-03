<?php

namespace ContainerGJ6igsF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EDFwMy7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EDFwMy7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EDFwMy7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'order' => ['privates', '.errored..service_locator.EDFwMy7.App\\Entity\\Order', NULL, 'Cannot autowire service ".service_locator.EDFwMy7": it needs an instance of "App\\Entity\\Order" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'order' => 'App\\Entity\\Order',
        ]);
    }
}
