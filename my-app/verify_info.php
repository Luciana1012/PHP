<?php
include "config.php";
$name = $_POST['nameid'];
$email = $_POST['emailid'];
$phone = $_POST['phoneid'];
$message = $_POST['messageid'];
echo $name,$email,$phone,$message;
$sql = "INSERT INTO messages(Name,Email,Phone,Message) VALUES('$name','$email','$phone','$message')";
$result = mysqli_query($conn, $sql);
header('Location: home.html');
?>