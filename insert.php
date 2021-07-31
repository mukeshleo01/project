


<?php

$conn = mysqli_connect('localhost','root','','test');

if(!$conn)
{
	die('Connection failed!'.mysqli_error($conn));
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];

$sql = "INSERT INTO reg(name, email, password, phone) VALUES('$name', '$email','$password','$phone')";
 $result = mysqli_query($conn,$sql);
 if($result){
     echo "success";
 }
 else{
     echo "error";
 }
?>