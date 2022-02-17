<?php

namespace ContainerBnAotPw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiUsuarioControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ApiUsuarioController' shared autowired service.
     *
     * @return \App\Controller\ApiUsuarioController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ApiUsuarioController.php';

        $container->services['App\\Controller\\ApiUsuarioController'] = $instance = new \App\Controller\ApiUsuarioController(($container->privates['App\\Repository\\UsuarioRepository'] ?? $container->load('getUsuarioRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\ApiUsuarioController', $container));

        return $instance;
    }
}
