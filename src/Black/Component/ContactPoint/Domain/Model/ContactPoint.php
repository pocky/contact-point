<?php

namespace Black\Component\ContactPoint\Domain\Model;

use Address\PostalAddress as Address;
use Black\DDD\DDDinPHP\Domain\Model\Entity;

/**
 * Class ContactPoint
 */
class ContactPoint implements Entity
{
    /**
     * @var ContactPointId
     */
    protected $contactPointId;

    /**
     * @var
     */
    protected $contactType;

    /**
     * @var
     */
    protected $telephone;

    /**
     * @var
     */
    protected $mobile;

    /**
     * @var
     */
    protected $email;

    /**
     * @var
     */
    protected $faxNumber;

    /**
     * @var Address
     */
    protected $address;

    /**
     * @param ContactPointId $contactPointId
     * @param $contactType
     * @param $telephone
     * @param $mobile
     * @param $email
     * @param $faxNumber
     * @param Address $address
     */
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

    /**
     * @return ContactPointId
     */
    public function getContactPointId()
    {
        return $this->contactPointId;
    }

    /**
     * @return mixed
     */
    public function getContactType()
    {
        return $this->contactType;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @return mixed
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }
}
