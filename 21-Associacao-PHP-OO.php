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


