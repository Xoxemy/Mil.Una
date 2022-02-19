<?php

namespace ContainerXqqcBPs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MAoJ4pWService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.MAoJ4pW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MAoJ4pW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'empleoRepository' => ['privates', 'App\\Repository\\EmpleoRepository', 'getEmpleoRepositoryService', true],
        ], [
            'empleoRepository' => 'App\\Repository\\EmpleoRepository',
        ]);
    }
}
