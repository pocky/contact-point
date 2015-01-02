<?php

namespace Black\Component\ContactPoint\Domain\Model;

use Address\PostalAddress as Address;
use Black\DDD\DDDinPHP\Domain\Model\Entity;

class ContactPoint implements Entity
{
    protected $contactPointId;

    protected $contactType;

    protected $telephone;

    protected $mobile;

    protected $email;

    protected $faxNumber;

    protected $address;

    public function __construct(
        ContactPointId $contactPointId,
        $contactType,
        $telephone,
        $mobile,
        $email,
        $faxNumber,
        Address $address
    ) {
        $this->contactPointId = $contactPointId;
        $this->contactType    = $contactType;
        $this->telephone      = $telephone;
        $this->mobile         = $mobile;
        $this->email          = $email;
        $this->faxNumber      = $faxNumber;
        $this->address        = $address;
    }

    public function getContactPointId()
    {
        return $this->contactPointId;
    }

    public function getContactType()
    {
        return $this->contactType;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    public function getAddress()
    {
        return $this->address;
    }
}
