<?php

namespace ContainerMrJcCi4;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IxD9RLmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IxD9RLm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IxD9RLm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'cartService' => ['privates', 'App\\Service\\CartService', 'getCartServiceService', true],
        ], [
            'cartService' => 'App\\Service\\CartService',
        ]);
    }
}
