<?php

/**
 * PHP version 7.1
 *
 * TransportAttachments entity
 *
 * @package RetailCrm\Mg\Bot\Model\Entity\Message
 */

namespace RetailCrm\Mg\Bot\Model\Entity\Message;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

/**
 * TransportAttachments class
 *
 * @package RetailCrm\Mg\Bot\Model\Entity\Message
 */
class TransportAttachments implements ModelInterface
{

    /**
     * @var array $suggestions
     *
     * @Type("array")
     * @Accessor(getter="getSuggestions",setter="setSuggestions")
     * @SkipWhenEmpty()
     */
    private $suggestions;

    /**
     * @param array $suggestions
     */
    public function setSuggestions(array $suggestions): void
    {
        $this->suggestions = $suggestions;
    }

    /**
     * @return array
     */
    public function getSuggestions(): array
    {
        return $this->suggestions;
    }
}
