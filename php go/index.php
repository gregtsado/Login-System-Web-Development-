<?php
include 'functionse/phpconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gregory</title>
</head>
<body style="background-color:skyblue;">

<center>
<h2>The Ultimate Calculator</h2>
<!-- <form method= "POST">
    <input type="number" placeholder= "input number" name="number " style="margin-left:20px;">
    <input type="submit" value="fact" name="fact"><br>
    <input type="number" placeholder= "enter radius of circle" name="radius" style="margin:20px;">
    <input type="submit" value="per" name="perimeter">
    <input type="submit" value= "area" name= "area"><br>
    <input type="number" placeholder= "cone height" name="height" style="margin:20px;"><br>
    <input type="number" placeholder= "cone radius" name="radius" style="margin:20px;">
    <input type="submit" value= "volume" name="conevolume"> -->

<!-- </form> -->


<!-- <form method="POST" action="functionse/insertnfunc.php"> -->
    <!-- <input type="text" placeholder="Username" name="name"><br>
    <input type="email" placeholder= "Email" name="email" style="margin:20px;"><br>
    <input type="password" placeholder= "Password" name="pwd" style="margin:20px;">
    <input type="number" placeholder="phone number" name="num"><br>
    <input type="text" placeholder= "address" name="address" style="margin-left:20px;"><br>
    <input type="submit" name="submit">    -->
    <!-- <input type="number" placeholder= "sec school " name="height" style="margin:20px;"><br>
    <input type="number" placeholder= "primary school" name="radius" style="margin:20px;"><br> -->
    <!-- <button type="submit" name="submit"> next page</button> -->
    
</form>
</center>





<form action="signup.php" method="POST">

<input type= "text" name="name" placeholder="username"><br>
<input type= "email" name="email" placeholder="email"><br>
<input type= "text" name="num" placeholder="phone number"><br>
<input type= "password" name="pwd" placeholder="password"><br>

<input type= "text" name="address" placeholder="address"><br>
<button type="submit" name="submit">sign up</button>


</form> 

 <?php

$pwd=12345;

$PASS=password_hash($pwd,PASSWORD_BCRYPT);

$k=password_verify($pwd,$PASS);

if($k==1){
echo "CORRECT";
}
else {
    echo "WRONG";
}

 

// if(isset($_GET['submit'])){
  
// }
//  if(isset($_POST['fact'])){
// if(isset($_POST['number'])){
//     $number=$_POST['number'];
//      echo factorial($number);
//  }
//  else{
//      echo "please write something";
//  }
//   }
//  if(isset($_POST['area'])){
//  if(isset($_POST['radius'])){
//   $r=$_POST['radius'];
//   echo Area($r);
//  }
//  }

//  if(isset($_POST['perimeter'])){
//     if(isset($_POST['radius'])){
//      $r=$_POST['radius'];
//      echo perimeter($r); 
//     }
//     else {
//         echo "try again";
//     }
// }

    
//     if(isset($_POST['conevolume'])){
//         if(isset($_POST['radius'])){
//          $r=$_POST['radius'];
//          $h=$_POST['height'];
//          echo vol($r,$h); 


//        $_SESSION['username']="greg";
//        $_SESSION['password']= 12345;  -->

 ?>
</body>
</html>