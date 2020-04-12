<?php

class Product{
    var $name;
    var $description;
    var $price;
}

$tv = new Product();
$tv->name = "TV";
$tv->price = 4.500;
$tv->description = "Smart TV";

echo $tv->name; echo ", ";
echo $tv->description; echo ", ";
echo $tv->price;

echo "<hr>";

$geladeira = new Product();
$geladeira->name = "Geladeira";
$geladeira->price = 500;
$geladeira->description = "Duas Portas";

echo $geladeira->name; echo ", ";
echo $geladeira->description; echo ", ";
echo $geladeira->price;
