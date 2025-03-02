<?php

namespace ContainerNHMev1o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_69GazAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.69GazA_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.69GazA_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'paiementRepository' => ['privates', 'App\\Repository\\PaiementRepository', 'getPaiementRepositoryService', true],
        ], [
            'paiementRepository' => 'App\\Repository\\PaiementRepository',
        ]);
    }
}
