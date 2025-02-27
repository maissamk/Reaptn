<?php

namespace ContainerGaCTBBw;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TqIg1ouService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TqIg1ou' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TqIg1ou'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'commande' => ['privates', '.errored..service_locator.TqIg1ou.App\\Entity\\Commande', NULL, 'Cannot autowire service ".service_locator.TqIg1ou": it needs an instance of "App\\Entity\\Commande" but this type has been excluded in "config/services.yaml".'],
        ], [
            'commande' => 'App\\Entity\\Commande',
        ]);
    }
}
