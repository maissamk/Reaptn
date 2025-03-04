<?php

namespace Container48xepVm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OZJWVTBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OZJWVTB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OZJWVTB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'cartService' => ['privates', 'App\\Service\\CartService', 'getCartServiceService', true],
            'request' => ['privates', '.errored.Ycx4Vjc', NULL, 'Cannot determine controller argument for "App\\Controller\\PanierController::updateQuantity()": the $request argument is type-hinted with the non-existent class or interface: "App\\Controller\\Request". Did you forget to add a use statement?'],
        ], [
            'cartService' => 'App\\Service\\CartService',
            'request' => '?',
        ]);
    }
}
