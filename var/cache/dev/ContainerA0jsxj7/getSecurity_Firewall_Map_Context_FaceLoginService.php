<?php

namespace ContainerA0jsxj7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Context_FaceLoginService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.firewall.map.context.face_login' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'FirewallContext.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'FirewallConfig.php';

        return $container->privates['security.firewall.map.context.face_login'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(fn () => new \EmptyIterator(), 0), NULL, NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('face_login', 'security.user_checker', '.security.request_matcher.DHzo0XA', false, false, NULL, NULL, NULL, NULL, NULL, [], NULL, NULL));
    }
}
