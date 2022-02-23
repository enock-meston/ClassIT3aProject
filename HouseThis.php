<?php
 class House {
     public $name;
     public $color;
     public function setDate($name,$color){
         $this->name =$name;
         $this->color=$color;
     }

     public function echoDate(){
         echo "THe color of the {$this->name} is {$this->color}";
     }
     public function form1(Type $var = null)
     {
        echo '
 <form>
 <label>first Name</label>
 <input type="text" name="fname" placeholder="enter fname"><br>

 <label>lastname Name</label>
 <input type="text" name="lname" placeholder="enter fname"><br>
 <input type="submit" name="save" value="save">
</form>
 ';
     }
 }

 $blackHouse = new House();
 $whiteHouse = new House();

 $blackHouse -> setDate("John's House","Black");
 $whiteHouse -> setDate("Peter's House","Black");

 $blackHouse ->echoDate();
 echo "<br>";
 $whiteHouse ->echoDate();
 
 $whiteHouse->form1();


?>