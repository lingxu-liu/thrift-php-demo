<?php
namespace Services\HelloWorld;
use Services\HelloWorld;
//use Services\HelloWorld\HelloWorldIf as HelloWorldIf;
require_once ('./HelloWorld.php');

class HelloWorldHandler implements HelloWorldIf {
    public function sayHello($name)
    {
        return "Hello $name";
    }
}
