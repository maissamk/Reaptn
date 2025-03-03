<?php

namespace ContainerYVCl4qz;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IAqn1gMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IAqn1gM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IAqn1gM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'contrat' => ['privates', '.errored..service_locator.IAqn1gM.App\\Entity\\Contrat', NULL, 'Cannot autowire service ".service_locator.IAqn1gM": it needs an instance of "App\\Entity\\Contrat" but this type has been excluded in "config/services.yaml".'],
            'pdfGeneratorService' => ['privates', 'App\\Service\\PdfGeneratorService', 'getPdfGeneratorServiceService', true],
        ], [
            'contrat' => 'App\\Entity\\Contrat',
            'pdfGeneratorService' => 'App\\Service\\PdfGeneratorService',
        ]);
    }
}
