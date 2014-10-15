<?php

namespace spec\Black\Component\ContactPoint\Domain\Model;

use Black\Component\ContactPoint\Domain\Model\ContactPointId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ContactPointIdSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Black\Component\ContactPoint\Domain\Model\ContactPointId');
        $this->shouldImplement('Black\DDD\DDDinPHP\Domain\Model\ValueObject');
    }

    function let()
    {
        $this->beConstructedWith(1234);
    }

    function it_should_have_to_string()
    {
        $this->__toString()->shouldReturn("1234");
    }

    function it_should_have_a_value()
    {
        $this->getValue()->shouldBeString();
        $this->getValue()->shouldReturn("1234");
    }

    function it_should_be_equal()
    {
        $cp = new ContactPointId(1234);
        $this->isEqualTo($cp)->shouldReturn(true);
    }
}
