<?php

namespace ContainerMrJcCi4;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpPaginatorBundleService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Knp\Bundle\PaginatorBundle\KnpPaginatorBundle' shared autowired service.
     *
     * @return \Knp\Bundle\PaginatorBundle\KnpPaginatorBundle
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'BundleInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'Bundle.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'KnpPaginatorBundle.php';

        return $container->services['Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle'] = new \Knp\Bundle\PaginatorBundle\KnpPaginatorBundle();
    }
}
