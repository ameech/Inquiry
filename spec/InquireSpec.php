<?php

namespace spec\Inquire;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class InquireSpec extends ObjectBehavior
{
    function let(\PDO $pdo)
    {
        $this->beConstructedWith($pdo);
    }

    function it_is_initializable(\PDO $pdo)
    {
        $this->shouldHaveType('Inquire\Inquire');
    }

    function it_sets_pdo_object(\PDO $pdo)
    {
        $this->pdo->shouldBeAnInstanceOf('\PDO');
    }
}
