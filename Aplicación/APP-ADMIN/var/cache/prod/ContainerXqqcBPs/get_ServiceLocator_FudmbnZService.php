<?php

namespace ContainerXqqcBPs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FudmbnZService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.FudmbnZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FudmbnZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'evento' => ['privates', '.errored..service_locator.FudmbnZ.App\\Entity\\Evento', NULL, 'Cannot autowire service ".service_locator.FudmbnZ": it references class "App\\Entity\\Evento" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'evento' => 'App\\Entity\\Evento',
        ]);
    }
}
