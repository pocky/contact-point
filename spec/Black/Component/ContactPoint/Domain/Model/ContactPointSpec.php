<?php

namespace spec\Black\Component\ContactPoint\Domain\Model;

use Address\Country;
use Address\Street;
use Address\PostalAddress as Address;
use Black\Component\ContactPoint\Domain\Model\ContactPointId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ContactPointSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Black\Component\ContactPoint\Domain\Model\ContactPoint');
        $this->shouldImplement('Black\DDD\DDDinPHP\Domain\Model\Entity');
    }

    function let()
    {
        $contactPointId = new ContactPointId(1234);

        $country = Country::buildFromISOCode("US");
        $street  = new Street(1600, "Amphitheatre Pkwy");
        $address = new Address(
            $street,
            "94043",
            "Mountain View",
            "CA",
            "",
            $country
        );

        $this->beConstructedWith(
            $contactPointId,
            "contactType",
            "telephone",
            "mobile",
            "email",
            "faxNumber",
            $address
        );
    }

    function it_should_have_a_contact_point_id()
    {
        $this->getContactPointId()->shouldReturn("1234");
    }

    function it_should_have_a_contact_type()
    {
        $this->getContactType()->shouldReturn("contactType");
    }

    function it_should_have_a_telephone()
    {
        $this->getTelephone()->shouldReturn("telephone");
    }

    function it_should_have_a_mobile()
    {
        $this->getMobile()->shouldReturn("mobile");
    }

    function it_should_have_a_fax_number()
    {
        $this->getFaxNumber()->shouldReturn("faxNumber");
    }

    function it_should_have_an_address()
    {
        $this->getAddress()->getValue()->shouldBeArray();
    }
}
