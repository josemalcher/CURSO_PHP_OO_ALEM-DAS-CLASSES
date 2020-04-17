<?php

class Cart{
    private $item = [];
    public function add(Product $product){
        array_push($this->item, $product);
    }
    public function all(): array
    {
        return $this->item;
    }
}
class Product{
    public $name;
}

$p1 = new Product();
$p1->name = "DVD";

$p2 = new Product();
$p2->name = "COMPUTADOR";

$p3 = new Product();
$p3->name = "GELAREIRA";

$cart = new Cart();
$cart->add($p1);
$cart->add($p2);
$cart->add($p3);
//print_r($cart->all());
$itens = $cart->all();
foreach ($itens as $iten):
    echo "Nome: {$iten->name} <br>";
endforeach;
