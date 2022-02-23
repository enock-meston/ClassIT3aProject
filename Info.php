<?php
class Employee{
Public $name;
Public $position;
function __construct($name, $position){
// This is initializing the class properties
$this->name=$name;
$this->profile=$position;

}

function show_details(){
echo $this->name.":";
echo "Your position is ".$this->profile."\n";
}


function __destructor(){
    echo "message from Destructor";
}

}
$employee_obj= new Employee ("Rakesh", "developer"); 
$employee_obj->show_details();
echo "exit";
echo"<br><br><br>";
$employee2= new Employee ("Vikas" , "Manager") ;
$employee2->show_details();

?>

