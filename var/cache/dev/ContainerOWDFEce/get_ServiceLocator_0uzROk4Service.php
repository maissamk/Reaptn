<?php

namespace ContainerOWDFEce;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0uzROk4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0uzROk4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0uzROk4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'offre' => ['privates', '.errored..service_locator.0uzROk4.App\\Entity\\Offre', NULL, 'Cannot autowire service ".service_locator.0uzROk4": it needs an instance of "App\\Entity\\Offre" but this type has been excluded in "config/services.yaml".'],
        ], [
            'offre' => 'App\\Entity\\Offre',
        ]);
    }
}
