<?php
      class A{
        final public function amethod()
        {
            echo "hello world";
        }
    }

    class B extends A{
        public function method(){
            parent::amethod();
        }

        // public function amethod(){    this can not be override

        // }
    }


$obj = new B();
echo $obj->amethod();




?>