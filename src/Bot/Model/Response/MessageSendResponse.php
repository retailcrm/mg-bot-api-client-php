<?php

/**
 * PHP version 7.1
 *
 * MessageSendResponse
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 */

namespace RetailCrm\Mg\Bot\Model\Response;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * MessageSendResponse class
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 */
class MessageSendResponse implements ModelInterface
{
    use CommonFields;

    /**
     * @var int $messageId
     *
     * @Type("int")
     * @Accessor(getter="getMessageId",setter="setMessageId")
     * @SkipWhenEmpty()
     */
    private $messageId;

    /**
     * @var string $time
     *
     * @Type("string")
     * @Accessor(getter="getTime",setter="setTime")
     * @SkipWhenEmpty()
     */
    private $time;

    /**
     * @return int|null
     */
    public function getMessageId(): ?int
    {
        return $this->messageId;
    }

    /**
     * @param int $messageId
     */
    public function setMessageId(int $messageId)
    {
        $this->messageId = $messageId;
    }

    /**
     * @return string|null
     */
    public function getTime(): ?string
    {
        return $this->time;
    }

    /**
     * @param string $time
     */
    public function setTime(string $time)
    {
        $this->time = $time;
    }
}
