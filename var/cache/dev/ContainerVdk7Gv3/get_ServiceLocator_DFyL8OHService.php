<?php

namespace ContainerVdk7Gv3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DFyL8OHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DFyL8OH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DFyL8OH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'categorieRepository' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', true],
        ], [
            'categorieRepository' => 'App\\Repository\\CategorieRepository',
        ]);
    }
}
