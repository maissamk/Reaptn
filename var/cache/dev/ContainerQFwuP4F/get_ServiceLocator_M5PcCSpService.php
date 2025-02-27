<?php

namespace ContainerQFwuP4F;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_M5PcCSpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.m5PcCSp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.m5PcCSp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'pdf' => ['services', 'knp_snappy.pdf', 'getKnpSnappy_PdfService', true],
        ], [
            'em' => '?',
            'pdf' => '?',
        ]);
    }
}
