<?php

namespace ContainerOPxseJ9;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Je7oNojService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.je7oNoj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.je7oNoj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'employe' => ['privates', '.errored..service_locator.je7oNoj.App\\Entity\\Employe', NULL, 'Cannot autowire service ".service_locator.je7oNoj": it needs an instance of "App\\Entity\\Employe" but this type has been excluded in "config/services.yaml".'],
        ], [
            'employe' => 'App\\Entity\\Employe',
        ]);
    }
}
