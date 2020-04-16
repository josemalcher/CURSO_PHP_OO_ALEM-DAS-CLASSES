<?php

class Escola
{
    const PID = "AAFGGCC";
    private static $saldo = 0.0;

    static public function getSaldo(): float
    {
        return self::$saldo;
    }

    static public function setSaldo(float $saldo)
    {
        self::$saldo += $saldo;
    }
}

class Aluno
{
    public $name;
    private $saldo = 0.0;

    public function setSaldo(float $saldo): void
    {
        $this->saldo = $saldo;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function novaCompra(float $valor)
    {
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;

            //Escola::$saldo += $valor; // Static propriedade
            Escola::setSaldo($valor); // Static methods

            return true;
        } else {
            return false;
        }
    }
}
echo "<hr>";

$aluno1 = new Aluno();
$aluno1->name = "JOSE";
echo $aluno1->getSaldo();
echo "<br>";
$aluno1->setSaldo(50.00);
$aluno1->novaCompra(20.0);
echo $aluno1->getSaldo();

echo "<br>";

echo "<hr>";

$aluno2 = new Aluno();
$aluno2->name = "JOSE";
echo $aluno2->getSaldo();
echo "<br>";
$aluno2->setSaldo(10.00);
$aluno2->novaCompra(5.0);
echo $aluno2->getSaldo();

echo "<br>";
echo "<hr>";

echo Escola::getSaldo();