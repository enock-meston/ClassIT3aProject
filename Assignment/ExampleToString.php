<?php
/*method allows a class to decide how 
it will react when it is treated like a string. 
For example, what echo $obj; will print. */

class Test 
{
    public $foo;
    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function __toString()
    {
       return $this->foo; 
    }


}


$class = new Test("Hello");
echo $class;


?>