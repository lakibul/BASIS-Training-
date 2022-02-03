<?php

namespace App\classes;
use App\classes\User;

class Series
{

    protected $startNumber;
    protected $endNumber;
    protected $check;
    protected $result;
    protected $i;

    public function __construct($data=null)
    {
        $this->startNumber  = $data['s_num'];
        $this->endNumber    = $data['e_num'];
        if (isset($data['even_odd'])){
            $this->check        = $data['even_odd'];
        }
    }

    public function index(){

        header('Location: pages/index.php');
    }

    public function makeSeries(){

        if ($this->startNumber > $this->endNumber){
            if ($this->check == 'odd'){
                return $this->bigToSmallOddSeries();
            }
            else if ($this->check = 'even'){
                return $this->bigToSmallEvenSeries();
            }
            else{
                return $this->bigToSmallSeries();
            }

        }else{
            if ($this->check == 'odd'){
                return $this->smallToBigOddSeries();
            }
            else if ($this->check = 'even'){
                return $this->smallToBigEvenSeries();
            }
            else{
                return $this->smallToBigSeries();
            }
        }
    }

    protected function smallToBigSeries(){

        for ($this->i = $this->startNumber; $this->i <= $this->endNumber; $this->i++){
            $this->result .= $this->i. ' ';
        }
        return $this->result;
    }
    protected function bigToSmallSeries(){

        for ($this->i = $this->startNumber; $this->i >= $this->endNumber; $this->i--){
            $this->result .= $this->i. ' ';
        }
        return $this->result;
    }
    protected function smallToBigOddSeries(){

            for ($this->i = $this->startNumber; $this->i <= $this->endNumber; $this->i++){
                if ($this->i % 2 != 0){
                    $this->result .= $this->i. ' ';
                }
            }
            return $this->result;
    }
    protected function smallToBigEvenSeries(){

        for ($this->i = $this->startNumber; $this->i <= $this->endNumber; $this->i++){
            if ($this->i % 2 == 0){
                $this->result .= $this->i. ' ';
            }
        }
        return $this->result;
    }

    protected function bigToSmallOddSeries(){

        for ($this->i = $this->startNumber; $this->i <= $this->endNumber; $this->i++){
            if ($this->i % 2 != 0){
                $this->result .= $this->i. ' ';
            }
        }
        return $this->result;
    }
    protected function bigToSmallEvenSeries(){

        for ($this->i = $this->startNumber; $this->i >= $this->endNumber; $this->i--){
            if ($this->i % 2 == 0){
                $this->result .= $this->i. ' ';
            }
        }
        return $this->result;
    }
}