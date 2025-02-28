<?php

namespace ContainerLgGxiuM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TwFrMDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TwFr_MD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TwFr_MD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'materielVenteRepository' => ['privates', 'App\\Repository\\MaterielventeRepository', 'getMaterielventeRepositoryService', true],
        ], [
            'materielVenteRepository' => 'App\\Repository\\MaterielventeRepository',
        ]);
    }
}
