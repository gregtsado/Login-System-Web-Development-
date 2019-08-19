<?php  
include "phpconnect.php";

$name = mysqli_real_escape_string($conn,$_POST['name'];
$email = mysqli_real_escape_string($conn,$_POST $_POST['email'];
$num =  mysqli_real_escape_string($conn,$_POST$_POST['num'];
$pwd =  mysqli_real_escape_string($conn,$_POST$_POST['pwd'];
$address =  mysqli_real_escape_string($conn,$_POST$_POST['address'];

$sql="INSERT INTO usertab(username,email, phonenumber,PASSWORD,address) VALUES('$name','$email','$num','$pwd','$address');";

mysqli_query($conn,$sql); 

header("location:../pagee.php");


