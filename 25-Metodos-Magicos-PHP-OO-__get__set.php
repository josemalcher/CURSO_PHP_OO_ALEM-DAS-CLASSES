<?php

class MyClass
{
    private $name;
    private $cpf;
    private $age;

    public function __set($name, $value)
    {
        $this->name = $value;
    }

    public function __get($name)
    {
        return $this->name;
    }

}

$obj = new MyClass();
$obj->name = "JoseMalcher";
$obj->cpf = 45688885;
$obj->age = 34;
echo $obj->name;
