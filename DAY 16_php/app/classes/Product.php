<?php

namespace App\classes;

class Product
{
    protected $products = [];

    public function getAllProduct()
    {
        return [
            0=>[
                'id' => '1',
                'name' => 'T-Shirt',
                'category' => 'Man Fashion',
                'brand'=> 'Yellow',
                'price' => '3500',
                'description' => '',
                'image'=> 'i1.jpg'
            ],
            1=>[
                'id' => '2',
                'name' => 'T-Shirt',
                'category' => 'Man Fashion',
                'brand'=> 'Yellow',
                'price' => '3500',
                'description' => '',
                'image'=> 'i2.jpg'
            ],
            2=>[
                'id' => '3',
                'name' => 'Smart Watch',
                'category' => 'Electronics',
                'brand'=> 'Samsung',
                'price' => '12500',
                'description' => '',
                'image'=> 'z3.jpg'
            ],
        ];
    }

    public function getProductById($id)
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                return $product;
            }
        }
    }
}