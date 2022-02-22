<?php
 class Example
 {
     public function echo($string){
         echo $string;
         
     }
 }
 
 class House
 {
     public $primaryColor ="black";
     public function changeColor(){
         $this->primaryColor = $color;
     }
 }
     
 $example= new Example();
 $example->echo("Hell world");

 $house = new House();
 echo $house ->primaryColor;
 $house->changeColor('white');
 s

?>