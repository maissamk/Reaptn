<?php

namespace ContainerGJ6igsF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRestControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Lexik\Bundle\TranslationBundle\Controller\RestController' shared autowired service.
     *
     * @return \Lexik\Bundle\TranslationBundle\Controller\RestController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'Csrf'.\DIRECTORY_SEPARATOR.'CsrfCheckerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'RestController.php';

        $container->services['Lexik\\Bundle\\TranslationBundle\\Controller\\RestController'] = $instance = new \Lexik\Bundle\TranslationBundle\Controller\RestController(($container->services['lexik_translation.data_grid.request_handler'] ?? $container->load('getLexikTranslation_DataGrid_RequestHandlerService')), ($container->services['lexik_translation.data_grid.formatter'] ?? $container->load('getLexikTranslation_DataGrid_FormatterService')), ($container->services['lexik_translation.translation_storage'] ?? $container->load('getLexikTranslation_TranslationStorageService')), ($container->services['lexik_translation.trans_unit.manager'] ?? $container->load('getLexikTranslation_TransUnit_ManagerService')));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('Lexik\\Bundle\\TranslationBundle\\Controller\\RestController', $container));
        $instance->setRequestStack(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
        $instance->setTokenManager(NULL);

        return $instance;
    }
}
