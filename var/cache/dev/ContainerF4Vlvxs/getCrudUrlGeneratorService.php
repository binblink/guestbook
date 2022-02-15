<?php

namespace ContainerF4Vlvxs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCrudUrlGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator
     *
     * @deprecated Since easycorp/easyadmin-bundle 3.2.0: The "EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator" service is deprecated, use "EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator" instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('easycorp/easyadmin-bundle', '3.2.0', 'The "EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator" service is deprecated, use "EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator" instead.');

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator'] = new \EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $container->getAdminContextProviderService()), ($container->services['router'] ?? $container->getRouterService()), ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\UrlSigner'] ?? ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\UrlSigner'] = new \EasyCorp\Bundle\EasyAdminBundle\Router\UrlSigner($container->getEnv('APP_SECRET')))), ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\DashboardControllerRegistry'] ?? ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\DashboardControllerRegistry'] = new \EasyCorp\Bundle\EasyAdminBundle\Registry\DashboardControllerRegistry($container->getEnv('APP_SECRET'), $container->targetDir.'', [0 => 'App\\Controller\\Admin\\DashboardController']))), ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\CrudControllerRegistry'] ?? ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\CrudControllerRegistry'] = new \EasyCorp\Bundle\EasyAdminBundle\Registry\CrudControllerRegistry($container->getEnv('APP_SECRET'), [0 => 'App\\Controller\\Admin\\CommentCrudController', 1 => 'App\\Controller\\Admin\\ConferenceCrudController']))));
    }
}
