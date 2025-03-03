<?php

namespace ContainerVdk7Gv3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpSnappy_ImageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'knp_snappy.image' shared service.
     *
     * @return \Knp\Snappy\Image
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-snappy'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Snappy'.\DIRECTORY_SEPARATOR.'GeneratorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-snappy'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Snappy'.\DIRECTORY_SEPARATOR.'AbstractGenerator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-snappy'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Snappy'.\DIRECTORY_SEPARATOR.'Image.php';

        $container->services['knp_snappy.image'] = $instance = new \Knp\Snappy\Image($container->getEnv('WKHTMLTOIMAGE_PATH'), [], []);

        $instance->setLogger(($container->privates['monolog.logger.snappy'] ?? $container->load('getMonolog_Logger_SnappyService')));

        return $instance;
    }
}
