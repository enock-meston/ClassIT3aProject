<?php
interface Person{
    // public $name;
    // public function __construct($name)
    // {
    //     $this->name = $name;
    // }
    public function Display($name);
    // public function Displaya($name,$name1);
}

class Programmer implements Person{
    public $name;
    public function Display($name)
    {
        return "Hello from ".$this->name=$name;
    } 
}

class Student implements Person{
    public $name;
    public function Display($name)
    {
        return "Howdy! I'm " .$this->name=$name;
    }
}

class Teacher implements Person{
    public $name;
    public function Display($name)
        {
            return "Good Morning dear students i'm your teacher ".$this->name=$name ;
        }
    }


    $programmer = new Programmer();
    echo $programmer->Display('john');
    echo "<br>";

    $student = new Student();
    echo $student->Display('doe');
    echo "<br>";

    $teacher = new Teacher();
    echo $teacher->Display('Mary');
    echo "<br>";
?>