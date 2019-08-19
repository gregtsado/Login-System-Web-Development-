<?php
include 'functionse/phpconnect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>
<form action="signup.php" method="POST">  
<input type= "text" name="name" placeholder="username" style= "margin:20px;"><br>
<input type= "password" name="pwd" placeholder="password"><br>
<button style= "margin:20px; color:red" type="submit" name="submit">log in</button>
</form>
</center>

</body>
</html>