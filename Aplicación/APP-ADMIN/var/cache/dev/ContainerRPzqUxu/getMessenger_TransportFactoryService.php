<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/Container24eWKRp/getMessenger_TransportFactoryService.php
namespace Container24eWKRp;
=======
<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/Container2x9EUrJ/getMessenger_TransportFactoryService.php
namespace Container2x9EUrJ;
>>>>>>> 35d8e8d6c43cb91c2da1943efcc35b099aaf3e45
=======
=======
<<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/Container1VyNrWM/getMessenger_TransportFactoryService.php
namespace Container1VyNrWM;
========
<<<<<<< HEAD
>>>>>>> 477da2d03e5a4f1bb6508b77c2aa473ff27ca652
=======
>>>>>>> cebea07cd9427ec42e23db05512f7a6a976d3b7f
>>>>>>> 35d8e8d6c43cb91c2da1943efcc35b099aaf3e45
namespace ContainerRPzqUxu;
>>>>>>> c3c3798b07e811dc68b12039783577c1443ac405:Aplicación/APP-ADMIN/var/cache/dev/ContainerRPzqUxu/getMessenger_TransportFactoryService.php

>>>>>>>> main:Aplicación/APP-ADMIN/var/cache/dev/ContainerRPzqUxu/getMessenger_TransportFactoryService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_TransportFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.transport_factory' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\TransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'TransportFactory.php';

        return $container->privates['messenger.transport_factory'] = new \Symfony\Component\Messenger\Transport\TransportFactory(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['messenger.transport.amqp.factory'] ?? ($container->privates['messenger.transport.amqp.factory'] = new \Symfony\Component\Messenger\Bridge\Amqp\Transport\AmqpTransportFactory()));
            yield 1 => ($container->privates['messenger.transport.redis.factory'] ?? ($container->privates['messenger.transport.redis.factory'] = new \Symfony\Component\Messenger\Bridge\Redis\Transport\RedisTransportFactory()));
            yield 2 => ($container->privates['messenger.transport.sync.factory'] ?? $container->load('getMessenger_Transport_Sync_FactoryService'));
            yield 3 => ($container->privates['messenger.transport.in_memory.factory'] ?? ($container->privates['messenger.transport.in_memory.factory'] = new \Symfony\Component\Messenger\Transport\InMemoryTransportFactory()));
            yield 4 => ($container->privates['messenger.transport.doctrine.factory'] ?? $container->load('getMessenger_Transport_Doctrine_FactoryService'));
        }, 5));
    }
}
