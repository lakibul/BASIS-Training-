<?php
namespace App\classes;
class Register
{
    protected $name;
    protected $email;
    protected $mobile;
    protected $result;


    public function __construct($post = null)
    {
        if (isset($post['name']))
        {
            $this->name = $post['name'];
            $this->email = $post['email'];
            $this->mobile = $post['mobile'];
        }
    }

    public function add()
    {
//        session_start();
        $_SESSION['name'] = $this->name;
        $_SESSION['email'] = $this->email;
        $_SESSION['mobile'] = $this->mobile;

        return 'Data Store Successfully';
    }

    public function allData()
    {
        $this->result = [
            'name' => $_SESSION['name'],
            'email' => $_SESSION['email'],
            'mobile' => $_SESSION['mobile'],
        ];
        return $this->result;
    }
}