<?php
class User {
	public $name = 'Hyvor';
	public function changeName($name) {
		$this -> ame = $name;
	}
}
$user = new User();
// Accesing public property from outside
echo $user -> name;
echo '<br>'; // a line break

// Accessing public method from outside
 $user -> changeName('Hyvor Developer');
echo $user->ame;

// class User {
// 	public $name = 'Hyvor'; // a private property
// 	public function echoName() { // a private method
// 		echo $this -> name ."<br>"; // this is valid
// 	}
// }
// $user = new User();
// $user -> echoName(); // valid
// echo $user -> name; // this will show an error

?>