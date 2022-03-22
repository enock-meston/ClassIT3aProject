<?php
include 'config.php';
include 'user.php';
include 'viewuser.php';





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="insert-user.php" method="POSt">
        username:<input type="text" name="username" ><br>
        email:<input type="text" name="email" ><br>
        password:<input type="password" name="pass" ><br>
        <input type="submit" value="save" name="savebtn">

    </form>
<br>
    <h1>View Users</h1>
<?php

    $user = new ViewUser();
    $user->showAlltUser();

?>
    
</body>
</html>