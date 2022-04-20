<?php
class Tree{
    function Tree(){
        echo " hello from user-defined constructor of tree class";
    }

    function __construct(){
        echo " hello from default constructor ";
    }
    
}


class SomeClass{
    function __construct(){
        echo "In const,";
        $this ->name ="Class Object";

    }

    function __destructor(){
        echo "Destroying,".$this->name ."\n";
    }
    
}
$object = new Tree();
echo "<br>";
$object ->Tree();


echo "<br><br><br><br><br>";
$obj1 = new SomeClass();
echo " enock lineeee";



?>