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

```php
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
```

- 21 - Associação PHP OO

```php
<?php

class Category
{
    public $name;
}

class Post
{
    public $title;
    public $content;
    private $category;

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function setCategory( Category $category): void
    {
        $this->category = $category;
    }
}

$php = new Category();
$php->name = "PHP";

$post01 = new Post();
$post01->title = "PHP é Legal";
$post01->content = "...";
$post01->setCategory($php);

echo $post01->getCategory()->name;



```

- 22 - Agregação PHP OO

```php
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

```

- 23 - Composição PHP OO

```php
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
```

- 24 - PHP OO Interfaces (Exemplo PDF)

```php
<?php
// Classe com PROBLEMA

class DOMPDF
{
    static public function generate(string $content): string
    {
        return "<p>{$content}</p>";
    }

    static public function printPDF($file)
    {
        return $file;
    }
}

echo DOMPDF::printPDF("OLA"); // impressão

// ficamos "amarrados" a essa classe de impressão!
```

```php
<?php
// MELHOR SOLUÇÃO
interface PdfInterface
{
    static public function generate(string $content): string;

    static public function printPDF($file);
}

class DOMPDF implements PdfInterface
{
    static public function generate(string $content): string
    {
        return "<small>{$content}</small>";
    }

    static public function printPDF($file)
    {
        return $file;
    }
}

class OutroPDF implements PdfInterface// outro metódo de impressão de PDF
{
    static public function generate(string $content): string
    {
        return "<h1>{$content}</h1>";
    }

    static public function printPDF($file)
    {
        return $file;
    }

}

class PDF extends OutroPDF
{

}

echo PDF::generate("Olá"); // impressão

// ficamos "amarrados" a essa classe de impressão!
```

[Voltar ao Índice](#indice)

---


## <a name="parte3">3 - Além das Classes</a>

- 25 - Métodos Mágicos PHP OO - __get __set

```php
<?php

class MyClass
{
    private $name;
    private $cpf;
    private $age;

    public function __set($name, $value)
    {
        $this->name = $value;
    }

    public function __get($name)
    {
        return $this->name;
    }

}

$obj = new MyClass();
$obj->name = "JoseMalcher";
$obj->cpf = 45688885;
$obj->age = 34;
echo $obj->name;

```

- 26 - Métodos Máticos PHP OO - __call __callStatic __toString

```php
<?php

class Str
{
    public function __call($name, $arguments)
    {
        //var_dump($arguments);
        if ($name === 'upper') {
            return strtoupper($arguments[0]);
        }
    }

    public static function __callStatic($name, $arguments)
    {
        if ($name === 'upper') {
            return strtoupper($arguments[0]);
        }
    }

    public function __toString()
    {
        return "__ToString!!";
    }

}

$obj = new Str();
echo $obj->upper("teste - eeeee"); // __call

echo "<hr>";

echo Str::upper('Valor com __callStatic'); // __callStatic

echo "<hr>";

echo $obj; // toString
```

- 27 - Funções para manipulação de classes - parte 01
- 28 - Funções para manipulação de classes - parte 02
- 29 - Funções para manipulação de classes - parte 03
- 30 - Funções para manipulação de classes - parte 04

[Voltar ao Índice](#indice)

---

