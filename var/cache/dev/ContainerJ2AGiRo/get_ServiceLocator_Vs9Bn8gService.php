<?php

namespace ContainerJ2AGiRo;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Vs9Bn8gService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vs9Bn8g' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vs9Bn8g'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'parcelleProprietesRepository' => ['privates', 'App\\Repository\\ParcelleProprietesRepository', 'getParcelleProprietesRepositoryService', true],
        ], [
            'parcelleProprietesRepository' => 'App\\Repository\\ParcelleProprietesRepository',
        ]);
    }
}
