<?php

namespace Container1VyNrWM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Qn8H32kService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qn8H32k' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qn8H32k'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'empleo' => ['privates', '.errored..service_locator.qn8H32k.App\\Entity\\Empleo', NULL, 'Cannot autowire service ".service_locator.qn8H32k": it references class "App\\Entity\\Empleo" but no such service exists.'],
        ], [
            'empleo' => 'App\\Entity\\Empleo',
        ]);
    }
}
