<?php

class ChainMethod{
    public $name="enock";
    
    function method1(){
        echo "hello from method1<br>";
        $this->name="chain method";
       return $this;
    }

    function method2(){
        
        echo "hello from method2 ($this->name)";
        
    }

}

$cn = new ChainMethod();
// $cn->method1()->method2("enock");
echo $cn->method2();

?>