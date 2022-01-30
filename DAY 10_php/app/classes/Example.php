<?php


namespace App\classes;
class Example
{
    public $name;
    public $email;
    public $mobile;
    public $firstName;
    public $lastName;
    public $x;
    public $y;
    public $z;
    public $data = [];

    public function index()
    {
//        $this->firstName = 'Rahim';
//        $this->lastName = 'khan';
//        echo "Full name is: ".$this->firstName." ".$this->lastName;
//        $this->x = 10;
//        $this->y = 20;
//        $this->y = 30;
//        echo ($this->x > $this->y)||($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x > $this->y)||($this->y < $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y)||($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y)||($this->y < $this->z);
//        echo '<br/>....<br/>';
        //        echo $this->x += $this->y; //this x = x+y;
//        echo '<br/>';
//        echo $this->x -= $this->y;
//        echo '<br/>';
//        echo $this->x *= $this->y;
//        echo '<br/>';
//        echo $this->x /= $this->y;
//        echo '<br/>';
//        echo $this->x %= $this->y;
//        echo '<br/>';
//        echo $this->x .= $this->y;
//        echo '<br/>';
//        echo $this->x++;
//        echo '<br/>';
//        echo $this->x;

//        echo $this->x + $this->y;
//        echo '<br/>';
//        echo $this->x - $this->y;
//        echo '<br/>';
//        echo $this->x * $this->y;
//        echo '<br/>';
//        echo $this->x / $this->y;
//        echo '<br/>';
//        echo $this->x % $this->y;

//        //IF_ELSE
//        $this->x = 100;
//        switch ($this->x)
//        {
//            case 10:
//                echo 'Hello World';
//                break;
//            case 20:
//                echo 'Hello Bangladesh';
//                break;
//            case 30:
//                echo 'Hello Dhaka';
//                break;
//            default:
//                echo 'Hello BITM';
//        }

//        if($this->x > 20)
//        {
//            echo $this->x;
//        }
//        else
//        {
//            echo 'Hello World';
//        }

//        //FOR LOOP
//        for($this->y = 10; $this->y <= 15; $this->y++)
//        {
//            echo 'Hello LOOP<br/>';
//        }

//        //WHILE
//        $this->x = 100;
//        while ($this->x < 110)
//        {
//            echo 'Hello World<br/>';
//            $this->x++;
//        }

//        //DO WHILE
//        $this->x = 100;
//        do{
//            echo 'Hello World<br/>';
//            $this->x++;
//        }while($this->x<110);


        $this->data = [10, 20, 30, 'BITM', 100.200. true];
        foreach ($this->data as $item)
        {
            echo $item;
        }
    }
}