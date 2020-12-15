<?php

/**
 * PHP version 7.1
 *
 * ErrorTrait
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 */

namespace RetailCrm\Mg\Bot\Model\Response;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;

/**
 * CommonFields trait
 *
 * @package  RetailCrm\Mg\Bot\Model\Response
 */
trait CommonFields
{
    /**
     * @var array $errors
     *
     * @Type("array")
     * @Accessor(getter="getErrors",setter="setErrors")
     * @SkipWhenEmpty()
     */
    private $errors;

    /**
     * @var int $statusCode
     * @Exclude()
     */
    private $statusCode;

    /**
     * @return array|null
     */
    public function getErrors(): ?array
    {
        return empty($this->errors) ? [] : $this->errors;
    }

    /**
     * @param array $errors
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
    }

    /**
     * @return int|null
     */
    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     */
    public function setStatusCode(int $statusCode)
    {
        $this->statusCode = $statusCode;
    }

    /**
     * @return bool
     */
    public function isSuccessful()
    {
        return empty($this->errors);
    }
}
