<?php

<<<<<<< HEAD
<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/Container2x9EUrJ/get_Console_Command_CachePoolPrune_LazyService.php
namespace Container2x9EUrJ;
=======
=======
<<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/Container1VyNrWM/get_Console_Command_CachePoolPrune_LazyService.php
namespace Container1VyNrWM;
========
>>>>>>> cebea07cd9427ec42e23db05512f7a6a976d3b7f
namespace ContainerRPzqUxu;
>>>>>>> c3c3798b07e811dc68b12039783577c1443ac405:Aplicación/APP-ADMIN/var/cache/dev/ContainerRPzqUxu/get_Console_Command_CachePoolPrune_LazyService.php

>>>>>>>> main:Aplicación/APP-ADMIN/var/cache/dev/ContainerRPzqUxu/get_Console_Command_CachePoolPrune_LazyService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_CachePoolPrune_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.cache_pool_prune.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.console.command.cache_pool_prune.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('cache:pool:prune', [], 'Prune cache pools', false, function () use ($container): \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand {
            return ($container->privates['console.command.cache_pool_prune'] ?? $container->load('getConsole_Command_CachePoolPruneService'));
        });
    }
}
