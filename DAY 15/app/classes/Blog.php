<?php
namespace App\classes;
class Blog
{
    protected $blogs;

    public function getAllBlog()
    {
        return [
            0 => [
                'title' => 'A new Blog',
                'description' => 'Blog Description',
                'author' => 'Lakib',
                'image' => 'p3.jpg'
            ],
            1 => [
                'title' => 'Another Blog',
                'description' => 'Blog Description',
                'author' =>'Shakil',
                'image' => 'p4.jpg'
            ],
            2 => [
                'title' => 'About Bangladesh',
                'description' => 'Blog Description',
                'author' => 'Ismail',
                'image' => 'p5.jpg'
            ],
        ];
    }
}