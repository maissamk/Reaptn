<?php

namespace ContainerExRDM87;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_ManagersLocatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.managers_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.authenticator.managers_locator'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['main' => #[\Closure(name: 'security.authenticator.manager.main', class: 'Symfony\\Component\\Security\\Http\\Authentication\\AuthenticatorManager')] fn () => ($container->privates['security.authenticator.manager.main'] ?? $container->load('getSecurity_Authenticator_Manager_MainService')), 'admin' => #[\Closure(name: 'security.authenticator.manager.admin', class: 'Symfony\\Component\\Security\\Http\\Authentication\\AuthenticatorManager')] fn () => ($container->privates['security.authenticator.manager.admin'] ?? $container->load('getSecurity_Authenticator_Manager_AdminService'))]);
    }
}
