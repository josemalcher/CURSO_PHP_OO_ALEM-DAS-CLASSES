<?php

class Product{
    var $name;
    var $description;
    var $price;

    function get(): String
    {
        return "{$this->name} # {$this->description} $ {$this->price} <hr>";
    }

}

$tv = new Product();
$tv->name = "TV";
$tv->price = 4.500;
$tv->description = "Smart TV";
echo $tv->get();

$geladeira = new Product();
$geladeira->name = "Geladeira";
$geladeira->price = 500;
$geladeira->description = "Duas Portas";

echo $geladeira->get();