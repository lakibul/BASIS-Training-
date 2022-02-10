<?php
namespace App\classes;
class User
{
    public function getAllUser()
    {
        return[
            0=>[
                'id' => 1,
                'name' => 'Lakib',
                'email'=> 'admin@gmail.com',
                'password'=>'1245'
            ],
            1=>[
                'id' => 2,
                'name' => 'Rafa khan',
                'email'=> 'rafa@gmail.com',
                'password'=>'1225'
            ],
            3=>[
                'id' => 3,
                'name' => 'Lakib',
                'email'=> 'admin@gmail.com',
                'password'=>'1345'
            ],
        ];
    }
}