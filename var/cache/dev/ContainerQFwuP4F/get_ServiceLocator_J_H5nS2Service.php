<?php

namespace ContainerQFwuP4F;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_J_H5nS2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.j.H5nS2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.j.H5nS2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'parcellePropriete' => ['privates', '.errored..service_locator.j.H5nS2.App\\Entity\\ParcelleProprietes', NULL, 'Cannot autowire service ".service_locator.j.H5nS2": it needs an instance of "App\\Entity\\ParcelleProprietes" but this type has been excluded in "config/services.yaml".'],
        ], [
            'parcellePropriete' => 'App\\Entity\\ParcelleProprietes',
        ]);
    }
}
