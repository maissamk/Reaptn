<?php

namespace ContainerGaCTBBw;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0d0FLAyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0d0FLAy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0d0FLAy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'contrat' => ['privates', '.errored..service_locator.0d0FLAy.App\\Entity\\Contrat', NULL, 'Cannot autowire service ".service_locator.0d0FLAy": it needs an instance of "App\\Entity\\Contrat" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'contrat' => 'App\\Entity\\Contrat',
            'entityManager' => '?',
        ]);
    }
}
