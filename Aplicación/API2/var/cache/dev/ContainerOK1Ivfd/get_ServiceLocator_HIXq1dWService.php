<?php

namespace ContainerOK1Ivfd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HIXq1dWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HIXq1dW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HIXq1dW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticator' => ['privates', 'App\\Security\\LoginAuthAuthenticator', 'getLoginAuthAuthenticatorService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'userAuthenticator' => ['privates', 'security.user_authenticator', 'getSecurity_UserAuthenticatorService', true],
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'authenticator' => 'App\\Security\\LoginAuthAuthenticator',
            'entityManager' => '?',
            'userAuthenticator' => '?',
            'userPasswordHasher' => '?',
        ]);
    }
}
