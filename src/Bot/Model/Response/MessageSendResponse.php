<?php

/**
 * PHP version 7.1
 *
 * MessageSendResponse
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
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
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
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
     * @return int
     */
    public function getMessageId(): int
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
     * @return string
     */
    public function getTime(): string
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
