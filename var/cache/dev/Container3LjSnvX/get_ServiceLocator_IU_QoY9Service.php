<?php

namespace Container3LjSnvX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IU_QoY9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IU.QoY9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IU.QoY9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'parcellePropriete' => ['privates', '.errored..service_locator.IU.QoY9.App\\Entity\\ParcelleProprietes', NULL, 'Cannot autowire service ".service_locator.IU.QoY9": it needs an instance of "App\\Entity\\ParcelleProprietes" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'parcellePropriete' => 'App\\Entity\\ParcelleProprietes',
        ]);
    }
}
