<?php

namespace ContainerZk5aYma;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GxkSA7lService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gxkSA7l' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gxkSA7l'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'validator' => ['privates', 'debug.validator', 'getDebug_ValidatorService', false],
        ], [
            'entityManager' => '?',
            'validator' => '?',
        ]);
    }
}
