<?php

namespace Container9tnLlEK;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QAUb40RService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qAUb40R' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qAUb40R'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'materiellocation' => ['privates', '.errored..service_locator.qAUb40R.App\\Entity\\Materiellocation', NULL, 'Cannot autowire service ".service_locator.qAUb40R": it needs an instance of "App\\Entity\\Materiellocation" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'materiellocation' => 'App\\Entity\\Materiellocation',
        ]);
    }
}
