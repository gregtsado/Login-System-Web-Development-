<?php
session_start();
include 'functionse/phpconnect.php';

$name=mysqli_real_escape_string($conn,$_POST['name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$num=mysqli_real_escape_string($conn,$_POST['num']);
$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
$address=mysqli_real_escape_string($conn,$_POST['address']);


$sql="SELECT * FROM usertab WHERE USERNAME=$_SESSION['username'];";

$result= mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck>0){
     mysqli_query($conn,$sql);
    // echo "email already exits";
    header("location:pagee.php");
}
else {
    $sql="INSERT INTO usertab(username,email, phonenumber,PASSWORD,address) VALUES('$name','$email','$num','$pwd','$address');";
 mysqli_query($conn,$sql);
  header("location:../login.php");
}




   