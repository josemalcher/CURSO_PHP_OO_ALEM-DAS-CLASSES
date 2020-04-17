<?php

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