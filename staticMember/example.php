<?php


class MyClass{

        public static $name= 'Tonny';
       
            public function __construct(){
                echo " <BR>we are  ". self::$name;
    }

//     public static function mysatMetthod(){


//         echo " WElcome ";
//     }
}

echo MyClass::$name;
MyClass::$name = 'tonyyy developer';
new MyClass();