<?php

namespace ContainerMrJcCi4;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUtilisateurService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.5iifHkm.App\Entity\Utilisateur' shared service.
     *
     * @return \App\Entity\Utilisateur
     */
    public static function do($container, $lazyLoad = true)
    {
        throw new RuntimeException('Cannot autowire service ".service_locator.5iifHkm": it needs an instance of "App\\Entity\\Utilisateur" but this type has been excluded in "config/services.yaml".');
    }
}
