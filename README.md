# CURSO PHP OO (ALÉM DAS CLASSES)

https://academy.especializati.com.br/curso/php-oo-alem-das-classes

PRENDA DE UMA VEZ POR TODAS PHP ORIENTADO A OBJETOS E AS MELHORES PRÁTICAS PARA A LINGUAGEM.

## <a name="indice">Índice</a>

1. [Organização PHP OO](#parte1)     
2. [PHP OO na Prática](#parte2)     
3. [Além das Classes](#parte3)     
---


## <a name="parte1">1 - Organização PHP OO</a>



[Voltar ao Índice](#indice)

---


## <a name="parte2">2 - PHP OO na Prática</a>

- 04 - PHP OO Classes e Atributos free

```php
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

```

- 05 - PHP OO Métodos

```php
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
```

- 06 - PHP OO Exercício de Desafio
- 07 - PHP OO Avançando com Métodos

```php
<?php

class Product{
    var $name;
    var $description;
    var $price;

    public function getDescription():String
    {
        return $this->description;
    }
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function getPrice():float
    {
        return $this->price;
    }
    public function setPrice($price): void
    {
        $this->price = $price;
    }
    function setName($name){
     $this->name = $name;
    }
    function getName():String{
        return strtoupper($this->name);
    }
    function get(): String
    {
        return "{$this->getName()} # {$this->getDescription()} $ {$this->getPrice()} <hr>";
    }
}

$tv = new Product();
$tv->setName("TV Samsaunga");
$tv->setPrice(4.500);
$tv->setDescription("Smart TV");
echo $tv->get();

$geladeira = new Product();
$geladeira->setName("Geladeira Bill Lux");
$geladeira->setPrice(500) ;
$geladeira->setDescription("Duas Portas - qualidade");

echo $geladeira->get();
```

- 08 - PHP OO Método Construtor

```php
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
```

- 09 - PHP OO Método Destrutor

```
    public function __destruct()
    {
      echo "<br>Método destrutor ativado!";
    }
```

- 10 - Introdução a Herança no PHP

```php

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

```

- 11 - Herança no PHP

```php
<?php

class Conta
{
    var $number;
    var $name;

    public function __construct($number, $name)
    {
        $this->number = $number;
        $this->name = $name;
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


}

class ContaFisica extends Conta
{
    var $cpf;

    /**
     * ContaFisica constructor.
     * @param $cpf
     */
    public function __construct($number, $name, $cpf)
    {
        Conta::setNumber($number);
        Conta::setName($name);
        $thisConta= $cpf;
    }


    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf): void
    {
        $this->cpf = $cpf;
    }

    function getDados()
    {
        return "Nome: {$this->getName()}, Número: {$this->getNumber()}, CPF: {$this->getCpf()}";
    }

}

class ContaJuridica extends Conta
{
    var $cnpj;

    public function __construct($number, $name, $cnpj)
    {
        Conta::setNumber($number);
        Conta::setName($name);
        $this->cnpj = $cnpj;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCnpj($cnpj): void
    {
        $this->cnpj = $cnpj;
    }

    function getDados()
    {
        return "Nome: {$this->getName()}, Número: {$this->getNumber()}, CNPJ: {$this->getCnpj()}";
    }
}

$jose = new ContaFisica(123, "José Malcher", 123456678);
echo $jose->getDados();

echo "<hr>";

$empresa = new ContaJuridica(987, "Empresa Tal", 777666222);
echo $empresa->getDados();

```

- 12 - Polimorfismo no PHP

```php
<?php

class Conta
{
    var $number;
    var $name;

    public function __construct($number, $name)
    {
        $this->number = $number;
        $this->name = $name;
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

    public function setName(String $name): void
    {
        $this->name = $name;
    }


}

class ContaFisica extends Conta
{
    var $cpf;

    /**
     * ContaFisica constructor.
     * @param $cpf
     */
    public function __construct($number, $name, $cpf)
    {
        Conta::setNumber($number);
        Conta::setName($name);
        $thisConta= $cpf;
    }


    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf): void
    {
        $this->cpf = $cpf;
    }

    function getDados()
    {
        return "Nome: {$this->getName()}, Número: {$this->getNumber()}, CPF: {$this->getCpf()}";
    }

}

class ContaJuridica extends Conta
{
    var $cnpj;

    public function __construct($number, $name, $cnpj)
    {
        Conta::setNumber($number);
        $this->setName($name);
        $this->cnpj = $cnpj;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCnpj($cnpj): void
    {
        $this->cnpj = $cnpj;
    }

    public function setName(String $name): void
    {
        $this->name = strtoupper($name); // REESCRITA
    }

    function getDados()
    {
        return "Nome: {$this->getName()}, Número: {$this->getNumber()}, CNPJ: {$this->getCnpj()}";
    }


}

$jose = new ContaFisica(123, "José Malcher", 123456678);
echo $jose->getDados();

echo "<hr>";

$empresa = new ContaJuridica(987, "Empresa Tal", 777666222);
echo $empresa->getDados();

```

- 13 - Classes Abstratas no PHP

```php
<?php

abstract class Conta
{
    var $number;
    var $name;
// .....
}
//$empresaAbstrata = new Conta(); // não é possivel por ser uma classe abstrata

```

- 14 - Métodos Abstratos no PHP

```php
<?php

abstract class Conta
{
    var $number;
    var $name;

    abstract public function getData() : String;

}

class ContaFisica extends Conta
{
    var $cpf;

    public function getData(): string
    {
        return "Nome: {$this->getName()}, Número: {$this->getNumber()}, CPF: {$this->getCpf()}";   // TODO: Implement getData() method.
    }
}

class ContaJuridica extends Conta
{
    var $cnpj;

    public function getData(): string
    {
        return "Nome: {$this->getName()}, Número: {$this->getNumber()}, CNPJ: {$this->getCnpj()}";
    }

}


```

- 15 - Classes Finais no PHP

```php

final class ContaFisica extends Conta
{
    var $cpf;

    public function getData(): string
    {
        return "Nome: {$this->getName()}, Número: {$this->getNumber()}, CPF: {$this->getCpf()}";   // TODO: Implement getData() method.
    }
}

final class ContaJuridica extends Conta
{
    var $cnpj;

    public function getData(): string
    {
        return "Nome: {$this->getName()}, Número: {$this->getNumber()}, CNPJ: {$this->getCnpj()}";
    }

}

 // imposibilita as classes de serem extendidas

```

- 16 - Métodos Final no PHP

```php
abstract class Conta
{
    var $number;
    var $name;

    final public function setNumber($number): void
    {
        $this->number = $number;
    }
}

// Garante que o método não será reescrito 
```

- 17 - Encapsulamento no PHP OO

```php
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
```

- 18 - Constantes no PHP OO

```php
<?php
class Escola
{
    const PID = "AJDDDDFF";
}
$escola01 = new Escola();
echo $escola01::PID;

//$escola01::PID = 123; // não é possível
```

- 19 - Propriedades Estáticas PHP OO

```php
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
```

- 20 - Métodos Estáticos PHP OO
- 21 - Associação PHP OO
- 22 - Agregação PHP OO
- 23 - Composição PHP OO
- 24 - PHP OO Interfaces (Exemplo PDF)

[Voltar ao Índice](#indice)

---


## <a name="parte3">3 - Além das Classes</a>

- 25 - Métodos Mágicos PHP OO - __get __set
- 26 - Métodos Máticos PHP OO - __call __callStatic __toString
- 27 - Funções para manipulação de classes - parte 01
- 28 - Funções para manipulação de classes - parte 02
- 29 - Funções para manipulação de classes - parte 03
- 30 - Funções para manipulação de classes - parte 04

[Voltar ao Índice](#indice)

---

