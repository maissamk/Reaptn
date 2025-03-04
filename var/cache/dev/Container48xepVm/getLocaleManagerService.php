<?php

namespace Container48xepVm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLocaleManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Lexik\Bundle\TranslationBundle\Manager\LocaleManager' shared service.
     *
     * @return \Lexik\Bundle\TranslationBundle\Manager\LocaleManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Manager'.\DIRECTORY_SEPARATOR.'LocaleManagerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Manager'.\DIRECTORY_SEPARATOR.'LocaleManager.php';

        return $container->services['Lexik\\Bundle\\TranslationBundle\\Manager\\LocaleManager'] = new \Lexik\Bundle\TranslationBundle\Manager\LocaleManager($container->parameters['lexik_translation.managed_locales']);
    }
}
