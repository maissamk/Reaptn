<?php

namespace ContainerMrJcCi4;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JaZM74nService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jaZM74n' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jaZM74n'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'livraison' => ['privates', '.errored..service_locator.jaZM74n.App\\Entity\\Livraison', NULL, 'Cannot autowire service ".service_locator.jaZM74n": it needs an instance of "App\\Entity\\Livraison" but this type has been excluded in "config/services.yaml".'],
        ], [
            'livraison' => 'App\\Entity\\Livraison',
        ]);
    }
}
