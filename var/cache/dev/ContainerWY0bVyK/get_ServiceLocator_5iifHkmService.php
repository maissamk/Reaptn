<?php

namespace ContainerWY0bVyK;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5iifHkmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5iifHkm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5iifHkm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'utilisateur' => ['privates', '.errored..service_locator.5iifHkm.App\\Entity\\Utilisateur', NULL, 'Cannot autowire service ".service_locator.5iifHkm": it needs an instance of "App\\Entity\\Utilisateur" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'utilisateur' => 'App\\Entity\\Utilisateur',
        ]);
    }
}
