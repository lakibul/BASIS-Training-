<?php
namespace App\classes;
class User
{
    public $city = 'Dhaka';
    protected $country = 'Bangladesh';
    private $area = 'Kawran Bazar';

    public function login()
    {
        echo 'Login';
    }

    protected function logout()
    {
        echo 'in logout';
    }

    private function profile()
    {
        echo 'in profile';
    }
}