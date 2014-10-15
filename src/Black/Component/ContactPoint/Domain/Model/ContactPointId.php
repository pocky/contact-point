<?php

namespace Black\Component\ContactPoint\Domain\Model;

use Black\DDD\DDDinPHP\Domain\Model\ValueObject;

/**
 * Class ContactPointId
 *
 * @author Alexandre Balmes <${COPYRIGHT_NAME}>
 * @license ${COPYRIGHT_LICENCE}
 */
class ContactPointId implements ValueObject
{
    /**
     * @var string
     */
    private $id;

    /**
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = (string) $id;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf("%s", $this->getValue());
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->id;
    }

    /**
     * @param ContactPointId $contactPointId
     * @return bool
     */
    public function isEqualTo(ContactPointId $contactPointId)
    {
        return $contactPointId->getValue() === $this->getValue();
    }
}
