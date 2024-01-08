<?php

namespace Container0uIprZH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFailedMessageRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\FailedMessageRepository' shared autowired service.
     *
     * @return \App\Repository\FailedMessageRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/FailedMessageRepository.php';

        return $container->privates['App\\Repository\\FailedMessageRepository'] = new \App\Repository\FailedMessageRepository(($container->privates['messenger.transport.failed'] ?? $container->load('getMessenger_Transport_FailedService')));
    }
}
