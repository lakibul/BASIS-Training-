<?php
namespace App\classes;
class Home
{
    protected $i;
    protected $number;
    protected $n = 0;

    public function __construct($post = null)
    {
        $this->number = $post['given_number'];
    }

    public function index()
    {
        header('Location: action.php?pages=home');
    }

    public function primeNumber($post = null)
    {
        if($this->number == 1 || $this->number == 2)
        {
            return "Your entered number $this->number is prime";
        }
        else
        {
            for($this->i = 2; $this->i < $this->number; $this->i++)
            {
                if($this->number % $this->i == 0)
                {
                    return "Your entered number $this->number is not prime";
                }
            }
            return "Your entered number $this->number is prime";

        }

//        if ($this->n == 0)
//        {
//            echo $this->number.=" is a prime number.";
//        }
//        else {
//            echo $this->number.=" is not a prime number.";
//        }
    }
}