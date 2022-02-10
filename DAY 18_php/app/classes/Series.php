<?php
namespace App\classes;
class Series
{
    protected $i;
    protected $result;
    protected $sum;
    protected $starting_number;
    protected $ending_number;

    public function __construct($post = null)
    {
        $this->starting_number = $post['starting_number'];
        $this->ending_number = $post['ending_number'];
    }

    public function getSeries()
    {
        for ($this->i = $this->starting_number; $this->i <= $this->ending_number; $this->i++)
        {
            $this->result .= $this->i.' + ';
            $this->sum += $this->i;
        }
//        return rtrim($this->result,' + '). ' = '. $this->sum;
        return [
            'result' => rtrim($this->result,' + '). ' = '. $this->sum,
            'starting_number' => $this->starting_number,
            'ending_number' => $this->ending_number,
        ];
    }
}