<?php
include 'config.php';
include 'user.php';

if (isset($_POST['savebtn'])) {
    
    $user =$_POST['username'];
    $email =$_POST['email'];
    $pass =$_POST['pass'];

    $insertUser = new User();
    $insertUser->insertUser($user,$email,$pass);

}


?>