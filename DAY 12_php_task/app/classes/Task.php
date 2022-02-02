<?php

namespace App\classes;

class task
{
    public $start;
    public $end;
    public $result='';

    public function __construct($data){

        $this->start = min((int)$data['start_number'],(int)$data['end_number']);
        $this->end = max((int)$data['start_number'],(int)$data['end_number']);

        for($i= $this->start; $i<= $this->end; $i++)
        {
            $this->result.=(string)$i;
        }


    }

    public function index(){
        echo $this->result;
        return $this->result;
    }

}