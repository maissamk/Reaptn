<?php

namespace ContainerLFfjk5n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetDatabaseResourcesEventService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Lexik\Bundle\TranslationBundle\EventDispatcher\Event\GetDatabaseResourcesEvent' shared service.
     *
     * @return \Lexik\Bundle\TranslationBundle\EventDispatcher\GetDatabaseResourcesListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'EventDispatcher'.\DIRECTORY_SEPARATOR.'GetDatabaseResourcesListener.php';

        return $container->privates['Lexik\\Bundle\\TranslationBundle\\EventDispatcher\\Event\\GetDatabaseResourcesEvent'] = new \Lexik\Bundle\TranslationBundle\EventDispatcher\GetDatabaseResourcesListener(($container->services['lexik_translation.translation_storage'] ?? $container->load('getLexikTranslation_TranslationStorageService')), 'orm');
    }
}
