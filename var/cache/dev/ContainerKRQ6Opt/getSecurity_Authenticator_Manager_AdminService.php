<?php

namespace ContainerKRQ6Opt;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_Manager_AdminService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.manager.admin' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticatorManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticatorManagerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'UserAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticatorManager.php';

        $a = ($container->privates['App\\Security\\LoginFormAuthenticator'] ?? $container->load('getLoginFormAuthenticatorService'));

        if (isset($container->privates['security.authenticator.manager.admin'])) {
            return $container->privates['security.authenticator.manager.admin'];
        }
        $b = ($container->privates['security.authenticator.form_login.admin'] ?? $container->load('getSecurity_Authenticator_FormLogin_AdminService'));

        if (isset($container->privates['security.authenticator.manager.admin'])) {
            return $container->privates['security.authenticator.manager.admin'];
        }
        $c = ($container->privates['debug.security.event_dispatcher.admin'] ?? self::getDebug_Security_EventDispatcher_AdminService($container));

        if (isset($container->privates['security.authenticator.manager.admin'])) {
            return $container->privates['security.authenticator.manager.admin'];
        }

        return $container->privates['security.authenticator.manager.admin'] = new \Symfony\Component\Security\Http\Authentication\AuthenticatorManager([$a, $b, ($container->privates['security.authenticator.remember_me.admin'] ?? $container->load('getSecurity_Authenticator_RememberMe_AdminService'))], ($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), $c, 'admin', ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container)), true, true, []);
    }
}
