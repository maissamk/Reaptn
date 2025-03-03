<?php

namespace ContainerLFfjk5n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLexikTranslation_Exporter_JsonService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'lexik_translation.exporter.json' shared service.
     *
     * @return \Lexik\Bundle\TranslationBundle\Translation\Exporter\JsonExporter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Exporter'.\DIRECTORY_SEPARATOR.'ExporterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Exporter'.\DIRECTORY_SEPARATOR.'JsonExporter.php';

        return $container->services['lexik_translation.exporter.json'] = new \Lexik\Bundle\TranslationBundle\Translation\Exporter\JsonExporter(false);
    }
}
