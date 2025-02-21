<?php

namespace ContainerExRDM87;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Command_DebugFirewallService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.command.debug_firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugFirewallCommand.php';

        $a = ($container->privates['App\\Security\\LoginFormAuthenticator'] ?? $container->load('getLoginFormAuthenticatorService'));

        $container->privates['security.command.debug_firewall'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand($container->parameters['security.firewalls'], ($container->privates['.service_locator.DdRG1kp'] ?? self::get_ServiceLocator_DdRG1kpService($container)), ($container->privates['.service_locator.OFsXjhj'] ?? $container->load('get_ServiceLocator_OFsXjhjService')), ['main' => [$a, ($container->privates['security.authenticator.form_login.main'] ?? $container->load('getSecurity_Authenticator_FormLogin_MainService')), ($container->privates['security.authenticator.remember_me.main'] ?? $container->load('getSecurity_Authenticator_RememberMe_MainService'))], 'admin' => [$a, ($container->privates['security.authenticator.form_login.admin'] ?? $container->load('getSecurity_Authenticator_FormLogin_AdminService')), ($container->privates['security.authenticator.remember_me.admin'] ?? $container->load('getSecurity_Authenticator_RememberMe_AdminService'))]], false);

        $instance->setName('debug:firewall');
        $instance->setDescription('Display information about your security firewall(s)');

        return $instance;
    }
}
