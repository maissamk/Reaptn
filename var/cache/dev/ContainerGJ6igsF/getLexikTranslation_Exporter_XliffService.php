<?php

namespace ContainerGJ6igsF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLexikTranslation_Exporter_XliffService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'lexik_translation.exporter.xliff' shared service.
     *
     * @return \Lexik\Bundle\TranslationBundle\Translation\Exporter\XliffExporter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Exporter'.\DIRECTORY_SEPARATOR.'ExporterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Translation'.\DIRECTORY_SEPARATOR.'Exporter'.\DIRECTORY_SEPARATOR.'XliffExporter.php';

        return $container->services['lexik_translation.exporter.xliff'] = new \Lexik\Bundle\TranslationBundle\Translation\Exporter\XliffExporter();
    }
}
