<?php
namespace App\classes;
class Example
{
    public $student = [];

    public function index()
    {
        $this->student = [50, 20, 'BITM', 10.20, true, false];
//        echo $this->student;
        foreach($this->student as $item)
        {
            echo $item.' ';
        }
    }
}