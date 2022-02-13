<?php

namespace App\classes;

class Product
{
    protected $file;
    protected $directory;
    protected $products;
    protected $product;
    protected $imageName;
    protected $name;
    protected $price;
    protected $description;
    protected $tempPath;

    public function __construct($post = null, $file = null)
    {
        $this->file = $file;
        $this->imageName = $file['image']['name'];
        $this->tempPath = $file['image']['tmp_name'];
        $this->directory = 'assets/img/product-image/'.$this->imageName;

//        echo '<pre>';
//        print_r($_POST);
//        print_r($_FILES);
//
//        echo $file['image']['name'];
    }

    public function index()
    {
        header('Location: action.php?pages=add-product');
    }

    public function newProduct()
    {
        move_uploaded_file($this->tempPath, $this->directory);
    }
}