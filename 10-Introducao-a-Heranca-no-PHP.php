<?php
/*
 * SEM HERANÇA
 *
 * */
class ContaFisica
{
    var $number;
    var $name;
    var $cpf;

    public function __construct($number, $name, $cpf)
    {
        $this->number = $number;
        $this->name = $name;
        $this->cpf = $cpf;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number): void
    {
        $this->number = $number;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf): void
    {
        $this->cpf = $cpf;
    }

    function getDados(){
        return "Nome: {$this->getName()}, Número: {$this->getNumber()}, CPF: {$this->getCpf()}";
    }

}

class ContaJuridica
{
    var $number;
    var $name;
    var $cnpj;

    public function __construct($number, $name, $cnpj)
    {
        $this->number = $number;
        $this->name = $name;
        $this->cnpj = $cnpj;
    }

     public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number): void
    {
        $this->number = $number;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }


    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCnpj($cnpj): void
    {
        $this->cnpj = $cnpj;
    }
    function getDados(){
        return "Nome: {$this->getName()}, Número: {$this->getNumber()}, CNPJ: {$this->getCnpj()}";
    }
}

$jose = new ContaFisica(123, "José Malcher", 123456678);
echo $jose->getDados();

echo "<hr>";

$empresa = new ContaJuridica(987, "Empresa Tal", 777666222);
echo $empresa->getDados();

/*
 * SEM HERANÇA
 *
 * */