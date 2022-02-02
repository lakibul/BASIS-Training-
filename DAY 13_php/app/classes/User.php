<?php
namespace App\classes;
class User
{
    protected $user = [];

    public function getAlluser()
    {
        $this->user = [
            0 => [
                'name' => 'Lakib',
                'mobile' => '02755456',
                'location' => 'Uttara',
            ],
            1 => [
                'name' => 'Monir',
                'mobile' => '02755456',
                'location' => 'Mirpur',
            ],
        ];
        return $this->user;
    }
}