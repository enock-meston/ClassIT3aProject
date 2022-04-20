<?php
class Person {
public $name;
public $age;
public function __construct($name, $age){
$this ->name = $name;
$this ->age = $age;
}

public function introduce(){
echo "My name is {$this -> name}. My age is {$this -> age}. from parent";
}
}
class Tom extends Person {
    public $school;
    public function __construct($name, $age, $school) {
        # Sthis -→ name and sthis -> age will be set by the parent's constru,
        parent:: __construct($name, $age);
        $this -> school=$school;
        }
        public function methi(){
            parent::introduce();
        }
        public function introduce(){
            echo "My name is {$this -> name}. My age is {$this -> age}.My school from Child";
            
        }
        
    }

$tom = new Tom('Tom', 29,'Foothill School');

$tom -> introduce();