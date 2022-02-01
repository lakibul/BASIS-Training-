<?php
namespace App\classes;
use App\classes\User;
class Calculator extends User
{
    protected $firstNumber = 10;
    private $secondNumber = 20;
    public $operator;
    public $result;

    public function __construct($data)
    {
//        echo is_array($data) ? 'data is array' : 'data is single variable';
        $this->firstNumber  = $data['first_number'];
        $this->secondNumber = $data['second_number'];
        $this->operator     = $data['operator'];
    }

    public function index()
    {
//        $this->user = new User();
//        echo $this->user->city;
        switch ($this->operator)
        {
            case '+':
                $this->result = $this->add();
                break;
            case '-':
                $this->result = $this->sub();
                break;
            case'*':
                $this->result = $this->multiplication();
                break;
            case '/':
                $this->result = $this->division();
                break;
        }
        return $this->result;

    }

    protected function add()
    {
        return $this->firstNumber + $this->secondNumber;
    }

    protected function sub()
    {
        return $this->firstNumber - $this->secondNumber;
    }
    protected function multiplication()
    {
        return $this->firstNumber * $this->secondNumber;
    }
    protected function division()
    {
        return $this->firstNumber / $this->secondNumber;
    }
}