<?php

class MyClassDad
{

}

class MyClass extends MyClassDad
{
    public $name;
    protected $idade;
    private $salario;

    public function method01()
    {

    }

    protected function method02()
    {

    }

    private function method03()
    {

    }
}

$obj = new MyClass();
//$methods = get_class_methods($obj);
$methods = get_class_methods('MyClass');
var_dump($methods); // array(1) { [0]=> string(8) "method01" }

echo "<hr>";

$vars = get_class_vars('Myclass');
var_dump($vars); // array(1) { ["name"]=> NULL }

echo "<hr>";

$objetos = get_object_vars($obj);
var_dump($objetos); // array(1) { ["name"]=> NULL }

echo "<hr>";

var_dump(get_class($obj)); // string(7) "MyClass"

echo "<hr>";

var_dump(get_parent_class($obj)); // string(10) "MyClassDad"

echo "<hr>";

var_dump(is_subclass_of($obj,'MyClassDad'));// é filha de "myclassdad" bool(true)

echo "<hr>";

var_dump(is_subclass_of($obj,'MyClassDad2'));// bool(false)

echo "<hr>";

var_dump(method_exists($obj, 'method03')); //verifica se o método existe - bool(true)

echo "<hr>";

var_dump(property_exists($obj, 'name')); // bool(true)
var_dump(property_exists($obj, 'phone')); // bool(false)