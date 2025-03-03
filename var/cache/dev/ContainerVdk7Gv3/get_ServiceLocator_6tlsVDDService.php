<?php

namespace ContainerVdk7Gv3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6tlsVDDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6tlsVDD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6tlsVDD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'materielventeRepository' => ['privates', 'App\\Repository\\MaterielventeRepository', 'getMaterielventeRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'materielventeRepository' => 'App\\Repository\\MaterielventeRepository',
            'paginator' => '?',
        ]);
    }
}
