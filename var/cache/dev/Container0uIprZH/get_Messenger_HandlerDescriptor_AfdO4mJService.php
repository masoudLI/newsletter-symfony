<?php

namespace Container0uIprZH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_AfdO4mJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.afdO4mJ' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/MessageHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/MessageHandler/SendNewsletterMessageHandler.php';
        include_once \dirname(__DIR__, 4).'/src/Service/SendNewsletterService.php';

        return $container->privates['.messenger.handler_descriptor.afdO4mJ'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \App\MessageHandler\SendNewsletterMessageHandler(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), new \App\Service\SendNewsletterService(($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')))), []);
    }
}