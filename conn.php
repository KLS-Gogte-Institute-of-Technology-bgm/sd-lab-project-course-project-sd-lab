<?php
$servername = "localhost";
$username = "root";
$dbname = "sdlab";
$password = "";

//Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if(!$conn){
	// die("Connectioned failed!" . mysqli_connect_error());
}
else{
	// echo "Connect success!";
}

?>
