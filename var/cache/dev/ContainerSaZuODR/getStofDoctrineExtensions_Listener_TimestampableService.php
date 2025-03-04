<?php

namespace ContainerSaZuODR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStofDoctrineExtensions_Listener_TimestampableService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'stof_doctrine_extensions.listener.timestampable' shared service.
     *
     * @return \Gedmo\Timestampable\TimestampableListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'event-manager'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'gedmo'.\DIRECTORY_SEPARATOR.'doctrine-extensions'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'MappedEventSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'gedmo'.\DIRECTORY_SEPARATOR.'doctrine-extensions'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'AbstractTrackingListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'gedmo'.\DIRECTORY_SEPARATOR.'doctrine-extensions'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Timestampable'.\DIRECTORY_SEPARATOR.'TimestampableListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'clock'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ClockInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'clock'.\DIRECTORY_SEPARATOR.'ClockInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'clock'.\DIRECTORY_SEPARATOR.'Clock.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'gedmo'.\DIRECTORY_SEPARATOR.'doctrine-extensions'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'AttributeReader.php';

        $container->privates['stof_doctrine_extensions.listener.timestampable'] = $instance = new \Gedmo\Timestampable\TimestampableListener();

        $instance->setCacheItemPool(($container->privates['stof_doctrine_extensions.metadata_cache'] ??= new \Symfony\Component\Cache\Adapter\ArrayAdapter()));
        $instance->setClock(($container->privates['clock'] ??= new \Symfony\Component\Clock\Clock()));
        $instance->setAnnotationReader(($container->privates['.stof_doctrine_extensions.reader'] ??= new \Gedmo\Mapping\Driver\AttributeReader()));

        return $instance;
    }
}
