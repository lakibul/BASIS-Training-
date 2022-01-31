<?php
namespace App\classes;
class Example
{
    public $student = [];

    public function index()
    {
        $this->student = [
            0 => [
                'name'=> 'Lakib',
                'email'=>"lakibul.cse@gmail.com",
                'mobile'=>'017886355566'
            ],
            1 => [
                'name'=> 'Habib',
                'email'=>"habib.cse@gmail.com",
                'mobile'=>[
                    'personal' => '015866645634',
                    'Other' => '01245799345',
                ],
            ],
            2 => 'BITM',
            3 => [
                'name'=> 'Munna',
                'email'=>"munna.cse@gmail.com",
                'mobile'=> [
                  'Personal' => '0154335656',
                  'Other' => '0145335654',

                ],
            ],
        ];


        echo '<pre>';
        print_r($this->student);


//        foreach ($this->student as $item)
//        {
//            if(is_array($item))
//            {
//                foreach ($item as $value)
//                {
//                    if (is_array($value))
//                    {
//                        foreach ($value as $v_value)
//                        {
//                            echo $v_value.' ';
//                        }
//                    }
//                    else
//                    {
//                        echo $value.' ';
//                    }
//                }
//            }
//            else
//            {
//                echo $item;
//            }
//            echo '<br/>';
//        }



//        foreach ($this->student as $key => $item)
//        {
//            if($key == 0)
//            {
//                echo $item['name'].' '. $item['email'].' '.$item['mobile'],'<br/>';
//                break;
//            }
//
//        }

//        echo $this->student[1]['email'];

//        $this->student = [50, 20, 'BITM', 10.20, true, false];
////        echo $this->student;
//        foreach($this->student as $key => $student)
//        {
//            echo 'index no - '. $key. ' value - '.$student.'<br/>';
//        }
    }
}