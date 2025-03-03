<?php

namespace ContainerGJ6igsF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLexikTranslation_DataGrid_RequestHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'lexik_translation.data_grid.request_handler' shared service.
     *
     * @return \Lexik\Bundle\TranslationBundle\Util\DataGrid\DataGridRequestHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'DataGrid'.\DIRECTORY_SEPARATOR.'DataGridRequestHandler.php';

        $container->services['lexik_translation.data_grid.request_handler'] = $instance = new \Lexik\Bundle\TranslationBundle\Util\DataGrid\DataGridRequestHandler(($container->services['lexik_translation.trans_unit.manager'] ?? $container->load('getLexikTranslation_TransUnit_ManagerService')), ($container->privates['lexik_translation.file.manager'] ?? $container->load('getLexikTranslation_File_ManagerService')), ($container->services['lexik_translation.translation_storage'] ?? $container->load('getLexikTranslation_TranslationStorageService')), ($container->services['Lexik\\Bundle\\TranslationBundle\\Manager\\LocaleManager'] ?? $container->load('getLocaleManagerService')));

        $instance->setCreateMissing(false);
        $instance->setDefaultFileFormat('yml');

        return $instance;
    }
}
