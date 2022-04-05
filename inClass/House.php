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
     
     public function changeColor($color){
         $this->primaryColor = $color;
     }
     public function changeColor1(){
     $this->primaryColor="blue";
 }

 }
     
 $example= new Example();
 $example->echo("Hell world");

 $house = new House();
 echo $house ->primaryColor;
 $house->changeColor('white');
$house ->changeColor1();



 
 
?>