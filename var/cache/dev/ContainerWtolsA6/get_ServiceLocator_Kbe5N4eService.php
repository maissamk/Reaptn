<?php

namespace ContainerWtolsA6;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Kbe5N4eService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kbe5N4e' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kbe5N4e'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'materielvente' => ['privates', '.errored..service_locator.kbe5N4e.App\\Entity\\Materielvente', NULL, 'Cannot autowire service ".service_locator.kbe5N4e": it needs an instance of "App\\Entity\\Materielvente" but this type has been excluded in "config/services.yaml".'],
        ], [
            'materielvente' => 'App\\Entity\\Materielvente',
        ]);
    }
}
