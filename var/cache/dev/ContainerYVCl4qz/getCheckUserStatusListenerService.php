<?php

namespace ContainerYVCl4qz;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCheckUserStatusListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventListener\CheckUserStatusListener' shared autowired service.
     *
     * @return \App\EventListener\CheckUserStatusListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'CheckUserStatusListener.php';

        $a = ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService'));

        if (isset($container->privates['App\\EventListener\\CheckUserStatusListener'])) {
            return $container->privates['App\\EventListener\\CheckUserStatusListener'];
        }

        return $container->privates['App\\EventListener\\CheckUserStatusListener'] = new \App\EventListener\CheckUserStatusListener($a);
    }
}
