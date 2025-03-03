<?php

namespace ContainerGJ6igsF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLexikTranslation_TranslationStorageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'lexik_translation.translation_storage' shared service.
     *
     * @return \Lexik\Bundle\TranslationBundle\Storage\DoctrineORMStorage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'StorageInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'AbstractDoctrineStorage.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'translation-bundle'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'DoctrineORMStorage.php';

        return $container->services['lexik_translation.translation_storage'] = new \Lexik\Bundle\TranslationBundle\Storage\DoctrineORMStorage(($container->services['doctrine'] ?? self::getDoctrineService($container)), 'default', ['trans_unit' => 'Lexik\\Bundle\\TranslationBundle\\Entity\\TransUnit', 'translation' => 'Lexik\\Bundle\\TranslationBundle\\Entity\\Translation', 'file' => 'Lexik\\Bundle\\TranslationBundle\\Entity\\File']);
    }
}
