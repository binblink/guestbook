<?php

namespace Container8xK1oqa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommentCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\CommentCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\CommentCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/CommentCrudController.php';

        $container->services['App\\Controller\\Admin\\CommentCrudController'] = $instance = new \App\Controller\Admin\CommentCrudController();

        $instance->setContainer(($container->privates['.service_locator.EwaKCK_'] ?? $container->load('get_ServiceLocator_EwaKCKService'))->withContext('App\\Controller\\Admin\\CommentCrudController', $container));

        return $instance;
    }
}
