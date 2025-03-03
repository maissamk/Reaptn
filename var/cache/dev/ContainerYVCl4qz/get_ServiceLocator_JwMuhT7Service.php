<?php

namespace ContainerYVCl4qz;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JwMuhT7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JwMuhT7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JwMuhT7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'employeRepository' => ['privates', 'App\\Repository\\EmployeRepository', 'getEmployeRepositoryService', true],
        ], [
            'employeRepository' => 'App\\Repository\\EmployeRepository',
        ]);
    }
}
