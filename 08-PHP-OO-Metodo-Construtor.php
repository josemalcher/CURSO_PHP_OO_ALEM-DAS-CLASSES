<?php
class Product{
    var $name;
    var $description;
    var $price;

    public function __construct(String $name,String $description, float $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    function get(){
        return "{$this->name} # {$this->description} $ {$this->price} <hr>";
    }
}

$tv = new Product("TV Sansung", "Televisão de 50pol", 3000);
echo $tv->get();

$geladeira = new Product("Geladeira", "Duas Portas", 2000);
echo $geladeira->get();