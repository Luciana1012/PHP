<?php
//Create connection
$conn = mysqli_connect(
"localhost",
"root",
"root",
"mydb"
);

//check connection
if(!$conn){
	echo "failed";
}

?>