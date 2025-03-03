<?php

namespace ContainerLFfjk5n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_52Vt23pService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.52Vt23p' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.52Vt23p'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'materielventeRepository' => ['privates', 'App\\Repository\\MaterielventeRepository', 'getMaterielventeRepositoryService', true],
        ], [
            'materielventeRepository' => 'App\\Repository\\MaterielventeRepository',
        ]);
    }
}
