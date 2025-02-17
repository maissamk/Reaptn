<?php

namespace ContainerFXc5ywZ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I3mS6ILService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.I3mS6IL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.I3mS6IL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'employe' => ['privates', '.errored..service_locator.I3mS6IL.App\\Entity\\Employe', NULL, 'Cannot autowire service ".service_locator.I3mS6IL": it needs an instance of "App\\Entity\\Employe" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'employe' => 'App\\Entity\\Employe',
            'entityManager' => '?',
        ]);
    }
}
