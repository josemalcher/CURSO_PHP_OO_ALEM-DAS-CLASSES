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