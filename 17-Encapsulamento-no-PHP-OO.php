<?php

class Pessoa
{
    public $idade;
    protected $genero;
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }
}