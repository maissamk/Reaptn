<?php

namespace ContainerVhTBeJa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_V6favctService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.V6favct' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.V6favct'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'offre' => ['privates', '.errored..service_locator.V6favct.App\\Entity\\Offre', NULL, 'Cannot autowire service ".service_locator.V6favct": it needs an instance of "App\\Entity\\Offre" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'offre' => 'App\\Entity\\Offre',
        ]);
    }
}
