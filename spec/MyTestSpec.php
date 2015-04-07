<?php

namespace spec\App;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use PhpSpec\Laravel\LaravelObjectBehavior;


class MyTestSpec extends LaravelObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('App\MyTest');
    }

    function it_should_say_hello_world()
    {
    	$this->helloWorld()->shouldReturn('Hello World!');
    }
}
