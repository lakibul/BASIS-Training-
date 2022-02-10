<?php
namespace App\classes;
class Student
{
    protected $text;
    protected $students;
    protected $result = [];

    public function __construct($post=null)
    {
        if (isset($post['post']))
        {
            $this->text = $post['search'];
        }
    }

    public function getAllStudent()
    {
        return [
          0=>[
              'name'   => "Lakib",
              'mobile' => '021547545',
              'email'  => 'lakib@gmail.com',
              'address'=> 'uttara'
          ],
          1=>[
              'name'   => "Salam",
              'mobile' => '021547545',
              'email'  => 'salam@gmail.com',
              'address'=> 'Ashulia'
          ],
            2=>[
                'name'   => "Rasel",
                'mobile' => '021547545',
                'email'  => 'rasel@gmail.com',
                'address'=> 'Khilgaon'
            ],
            3=>[
                'name'   => "Riaj",
                'mobile' => '021547545',
                'email'  => 'riaj@gmail.com',
                'address'=> 'Banani'
            ],
            4=>[
                'name'   => "Beauty",
                'mobile' => '021547545',
                'email'  => 'beauty@gmail.com',
                'address'=> 'Mirpur'
            ],
        ];
    }

    public function getStudentBySearchText()
    {
        $this->students = $this->getAllStudent();
        foreach ($this->students as $student)
        {
            if($this->text == $student['name'])
            {
                $this->result = $student;
                break;
            }
        }
        return $this->result;
    }
}