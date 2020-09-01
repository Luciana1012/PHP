<?php
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		echo $_GET['user'];
		$user = $_GET['user'];
		echo $user, "<br>";
		$password = $_GET['password'];
		echo $password, "<br>";
		var_dump($_REQUEST);
		foreach($_REQUEST as $key =>$value){
			echo "field_", "$key",":",$value, 
			"<br>";
		}
		
		echo "THIS WORKS";
		
		/*************************************/
		$name = $_GET['nameid'];
		echo $name, "<br>";
		$email = $_GET['emailid'];
		echo $email, "<br>";
		$phone = $_GET['phoneid'];
		echo $phone, "<br>";
		$message = $_GET['messageid'];
		echo $message, "<br>";
		/*var_dump($name);
		foreach($_REQUEST as $key =>$value){
			echo "field", "$key",":",$value, 
			"<br>";
		}*/
	}


/*************************************/
//connection
$conn = mysqli_connect(
"127.0.0.1",
"root",
"root",
"mydb"
);

//check connection
if(!$conn){
	echo "failed";
}
else {
	echo "success";
}

//Perform query
$query = "SELECT * FROM login WHERE user = '$user' AND password = '$password'";
$result =  mysqli_query($conn, $query);
if ($result && mysqli_num_rows($result) > 0) {
	echo "Logged in";
} else {
	echo "Not logged";
}


mysqli_close($conn);



?>