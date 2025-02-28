<?php

namespace ContainerUY7D0Yf;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RXaRRrVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RXaRRrV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RXaRRrV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'commandeRepository' => ['privates', 'App\\Repository\\CommandeRepository', 'getCommandeRepositoryService', true],
        ], [
            'commandeRepository' => 'App\\Repository\\CommandeRepository',
        ]);
    }
}
