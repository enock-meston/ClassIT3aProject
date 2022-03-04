<?php
/*  The __call() method is called when an undefined or 
 inaccessible method is called. Which means it is Called 
 when an undefined or inaccessible method is invoked on an object.
*/
class Sample 
{
    
function user_define()
{
    echo "hello from UserDefine Methos<br>";
}

function __call($fun,$arg){
    echo "<br>hello form __call methos has function called  ".$fun."<br>";
    echo " parameter lis method does not exists";
    print_r($arg);
}
}

$obj = new Sample();
$obj ->run("Teater");
$obj -> eat("food","Potatoes");

$obj ->user_define();

$obj ->run("Teater","Enock","77","12345");

?>