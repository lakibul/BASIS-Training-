<?php


namespace App\classes;


class User
{
    protected $user = [];

    public function getAllUser(){

        $this->user = [
            0=> [
                'name'      => "Lakib",
                'mobile'    => '123456',
                'location'  => 'Lalbagh',
            ],
            1=> [
                'name'      => "Hasan",
                'mobile'    => '6879800',
                'location'  => 'Malibagh',
            ]
        ];
        return $this->user;
    }
}