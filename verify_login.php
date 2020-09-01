
<?php

include "config.php";

$user = $_POST['userid'];
$pass = $_POST['passwordid'];

$sql = "SELECT * FROM login WHERE username = '$user' AND password = '$pass'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if (count($row) > 0) {
	header('Location: home.html');
} else {
	echo 'No user found';
}


?>