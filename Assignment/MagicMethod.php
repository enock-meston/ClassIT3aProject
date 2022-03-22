<?php

class ClassA{

    private $data=[];
    private $name;
    private $age;
    
    public function __set($name,$age){
        $this->data[$name] =$age;
        
    }
    
    public function __get($name)
    {
            if (!array_key_exists($name,$this->data)) {
                return null;
            }
        return $this->data[$name];
    }


    public function __isset($age)
    {
        echo "'$age' is set?<br>";
        return isset($this->data[$age]);
    }

    public function __unset($age)
    {
        echo "'$age' is Unsetting <br>";
        unset($this->data[$age]);
    }  



    public function getData()
    {
        echo "my age :".$this->age;
        return $this->data;
    }
    
}


$ex = new ClassA();
$ex->getData();
echo $ex->age="22<br>";


var_dump(isset($ex->age));
unset($ex->age);


?>