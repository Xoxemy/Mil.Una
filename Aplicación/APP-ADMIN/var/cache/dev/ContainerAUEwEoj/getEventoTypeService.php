<?php

namespace ContainerAUEwEoj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEventoTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\EventoType' shared autowired service.
     *
     * @return \App\Form\EventoType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/EventoType.php';

        return $container->privates['App\\Form\\EventoType'] = new \App\Form\EventoType();
    }
}
