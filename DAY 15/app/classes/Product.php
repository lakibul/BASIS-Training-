<?php
namespace App\classes;
class Product
{
    protected $products;
    public function getAllProduct()
    {
        return[
            0 => [
                'ID' => '0',
                'Name' => 'Headphone',
                'Price'=> '25,000',
                'Brand'=> 'Nikon',
                'image'=> 'i1.jpg',
            ],
            1 => [
                'ID' => '1',
                'Name' => 'Camera',
                'Price'=> '5,000',
                'Brand'=> 'Nikon',
                'image'=> 'i2.jpg',
            ],
            2 => [
                'ID' => '2',
                'Name' => 'Lighter',
                'Price'=> '10,000',
                'Brand'=> 'Nikon',
                'image'=> 'i3.jpg'
            ],
            3 => [
                'ID' => '3',
                'Name' => 'Soap',
                'Price'=> '25,000',
                'Brand'=> 'Nikon',
                'image'=> 'i3.jpg'
            ],
            4 => [
                'ID' => '4',
                'Name' => 'Camera',
                'Price'=> '25,000',
                'Brand'=> 'Nikon',
                'image'=> 'i2.jpg'
            ],
            5 => [
                'ID' => '5',
                'Name' => 'Watch',
                'Price'=> '25,000',
                'Brand'=> 'Nikon',
                'image'=> 'i1.jpg'
            ],
            6 => [
                'ID' => '6',
                'Name' => 'Watch',
                'Price'=> '25,000',
                'Brand'=> 'Nikon',
                'image'=> 'i1.jpg'
            ],
            7 => [
                'ID' => '7',
                'Name' => 'Watch',
                'Price'=> '25,000',
                'Brand'=> 'Nikon',
                'image'=> 'i1.jpg'
            ],
            8 => [
                'ID' => '8',
                'Name' => 'Watch',
                'Price'=> '25,000',
                'Brand'=> 'Nikon',
                'image'=> 'i3.jpg'
            ],
            9 => [
                'ID' => '9',
                'Name' => 'Watch',
                'Price'=> '25,000',
                'Brand'=> 'Nikon',
                'image'=> 'i1.jpg'
            ],
        ];
    }
}