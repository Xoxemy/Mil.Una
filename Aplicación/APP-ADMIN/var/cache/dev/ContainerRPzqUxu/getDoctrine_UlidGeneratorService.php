<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/Container24eWKRp/getDoctrine_UlidGeneratorService.php
namespace Container24eWKRp;
=======
<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/Container2x9EUrJ/getDoctrine_UlidGeneratorService.php
namespace Container2x9EUrJ;
>>>>>>> 35d8e8d6c43cb91c2da1943efcc35b099aaf3e45
=======
=======
<<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/Container1VyNrWM/getDoctrine_UlidGeneratorService.php
namespace Container1VyNrWM;
========
<<<<<<< HEAD
>>>>>>> 477da2d03e5a4f1bb6508b77c2aa473ff27ca652
=======
>>>>>>> cebea07cd9427ec42e23db05512f7a6a976d3b7f
>>>>>>> 35d8e8d6c43cb91c2da1943efcc35b099aaf3e45
namespace ContainerRPzqUxu;
>>>>>>> c3c3798b07e811dc68b12039783577c1443ac405:Aplicación/APP-ADMIN/var/cache/dev/ContainerRPzqUxu/getDoctrine_UlidGeneratorService.php

>>>>>>>> main:Aplicación/APP-ADMIN/var/cache/dev/ContainerRPzqUxu/getDoctrine_UlidGeneratorService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_UlidGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.ulid_generator' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'Id'.\DIRECTORY_SEPARATOR.'AbstractIdGenerator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'IdGenerator'.\DIRECTORY_SEPARATOR.'UlidGenerator.php';

        return $container->privates['doctrine.ulid_generator'] = new \Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator(NULL);
    }
}
