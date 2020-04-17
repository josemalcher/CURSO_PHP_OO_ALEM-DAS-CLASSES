<?php

class Endereco
{
    public $rua;
    public $bairro;
}

class User
{
    public $name;
    private $endereco;

    public function setEndereco(string $rua, string $bairro): void
    {
        $endereco = new Endereco();
        $endereco->rua = $rua;
        $endereco->bairro = $bairro;
        $this->endereco = $endereco;
    }

    public function getEndereco(): string
    {
        return "Rua {$this->endereco->rua}, Bairro: {$this->endereco->bairro}";
    }
}

$jose = new User();
$jose->name = "José Malcher";
$jose->setEndereco("Travessa Tl tal tal ", "Cidade Velha tal");
echo $jose->getEndereco();