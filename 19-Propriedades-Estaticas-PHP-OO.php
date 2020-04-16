<?php

class Escola
{
    const PID = "AAFGGCC";
    static $saldo = 0.0;
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

            Escola::$saldo += $valor; // Static

            return true;
        }else{
            return false;
        }
    }
}