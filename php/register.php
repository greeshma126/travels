<?php
include 'connection.php';
$fullname=$_POST['fullname'];
$email=$_POST['email'];

$userid=$_POST['userid'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];




$string = "INSERT INTO registration(fullname, email, userid,password,phone,dob) VALUES ('$fullname',  '$email','$userid'
,'$password','$phone','$dob')";
if( $conn->query($string)){
    header("location: index.php");
}



?>