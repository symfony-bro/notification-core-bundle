<?php
/**
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */

namespace SymfonyBro\NotificationCoreBundle\EventDispatcher;


use SymfonyBro\NotificationCore\Model\MessageInterface;

class BeforeSendEvent
{
    /**
     * @var MessageInterface
     */
    private $message;

    /**
     * BeforeSendEvent constructor.
     * @param MessageInterface $message
     */
    public function __construct(MessageInterface $message)
    {
        $this->message = $message;
    }

    /**
     * @return MessageInterface
     */
    public function getMessage(): MessageInterface
    {
        return $this->message;
    }
}