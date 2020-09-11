<?php
namespace Andphp\Demo;

class Hello
{
    private $name;

    public function __construct($name = 'World')
    {
        $this->name = $name;
    }

    public function hello()
    {
        return 'Hello ' . $this->name.$this->testdd();
    }

    private function testdd(){
        dd();
    }
}
