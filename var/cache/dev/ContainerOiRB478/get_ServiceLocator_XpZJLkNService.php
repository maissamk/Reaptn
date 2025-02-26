<?php

namespace ContainerOiRB478;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XpZJLkNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xpZJLkN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xpZJLkN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'contrat' => ['privates', '.errored..service_locator.xpZJLkN.App\\Entity\\Contrat', NULL, 'Cannot autowire service ".service_locator.xpZJLkN": it needs an instance of "App\\Entity\\Contrat" but this type has been excluded in "config/services.yaml".'],
        ], [
            'contrat' => 'App\\Entity\\Contrat',
        ]);
    }
}
