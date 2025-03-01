<?php

namespace Container057x4Ex;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_W_TDhCzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.W.TDhCz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.W.TDhCz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'livraisonRepository' => ['privates', 'App\\Repository\\LivraisonRepository', 'getLivraisonRepositoryService', true],
        ], [
            'livraisonRepository' => 'App\\Repository\\LivraisonRepository',
        ]);
    }
}
