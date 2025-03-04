<?php

namespace Container48xepVm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLexikTranslation_ExporterCollectorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'lexik_translation.exporter_collector' shared service.
     *
     * @return \Lexik\Bundle\TranslationBundle\Translation\Exporter\ExporterCollector
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Exporter'.\DIRECTORY_SEPARATOR.'ExporterCollector.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Exporter'.\DIRECTORY_SEPARATOR.'ExporterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Exporter'.\DIRECTORY_SEPARATOR.'YamlExporter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Exporter'.\DIRECTORY_SEPARATOR.'PhpExporter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Exporter'.\DIRECTORY_SEPARATOR.'XliffExporter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Exporter'.\DIRECTORY_SEPARATOR.'JsonExporter.php';

        $container->services['lexik_translation.exporter_collector'] = $instance = new \Lexik\Bundle\TranslationBundle\Translation\Exporter\ExporterCollector();

        $instance->addExporter('Lexik\\Bundle\\TranslationBundle\\Translation\\Exporter\\XliffExporter', ($container->services['lexik_translation.exporter.xliff'] ??= new \Lexik\Bundle\TranslationBundle\Translation\Exporter\XliffExporter()));
        $instance->addExporter('Lexik\\Bundle\\TranslationBundle\\Translation\\Exporter\\JsonExporter', ($container->services['lexik_translation.exporter.json'] ??= new \Lexik\Bundle\TranslationBundle\Translation\Exporter\JsonExporter(false)));
        $instance->addExporter('Lexik\\Bundle\\TranslationBundle\\Translation\\Exporter\\YamlExporter', new \Lexik\Bundle\TranslationBundle\Translation\Exporter\YamlExporter(false));
        $instance->addExporter('Lexik\\Bundle\\TranslationBundle\\Translation\\Exporter\\PhpExporter', new \Lexik\Bundle\TranslationBundle\Translation\Exporter\PhpExporter());

        return $instance;
    }
}
