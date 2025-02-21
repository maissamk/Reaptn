<?php

namespace ContainerExRDM87;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\LoginSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\LoginSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventSubscriber'.\DIRECTORY_SEPARATOR.'LoginSubscriber.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->privates['App\\EventSubscriber\\LoginSubscriber'])) {
            return $container->privates['App\\EventSubscriber\\LoginSubscriber'];
        }

        return $container->privates['App\\EventSubscriber\\LoginSubscriber'] = new \App\EventSubscriber\LoginSubscriber($a);
    }
}
