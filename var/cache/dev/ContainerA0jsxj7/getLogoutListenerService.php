<?php

namespace ContainerA0jsxj7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLogoutListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventListener\LogoutListener' shared autowired service.
     *
     * @return \App\EventListener\LogoutListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'LogoutListener.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->privates['App\\EventListener\\LogoutListener'])) {
            return $container->privates['App\\EventListener\\LogoutListener'];
        }
        $b = ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService'));

        if (isset($container->privates['App\\EventListener\\LogoutListener'])) {
            return $container->privates['App\\EventListener\\LogoutListener'];
        }

        return $container->privates['App\\EventListener\\LogoutListener'] = new \App\EventListener\LogoutListener($a, ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)), $b);
    }
}
