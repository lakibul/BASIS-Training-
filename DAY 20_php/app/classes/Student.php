<?php

namespace App\classes;
use App\classes\User;
use App\classes\ExampleOne;
use App\classes\ExampleTwo;
use App\classes\Teacher;
use App\classes\Catagory;

class Student extends Teacher implements ExampleOne, ExampleTwo
{
    use Catagory;
    protected $country = 'Bangladesh';
    public static $area = 'Farmgate';

    public function __construct()
    {
//        $this->name = 'Riaj';
//        $this->city = 'Savar';
    }

    public function manage()
        {
            echo self::$area; //scope resolution operator
//          echo "Institute name is $this->name and city is $this->city and country is $this->country", '<br/>';
        }

    public function one()
    {
        echo 'One';
    }

    public function two()
    {
        echo 'two';
    }

    public function three()
    {
        // TODO: Implement three() method.
    }

    public function ten()
    {
        // TODO: Implement ten() method.
    }

    public function ten1()
    {
        // TODO: Implement ten1() method.
    }

    public function test()
    {
        echo 'Hello Test';
    }

    public static function demo()
    {
        echo 'Hello Demo';
    }
}