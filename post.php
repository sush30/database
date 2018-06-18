<?php
$host="localhost";
$user="root";
$password="sushmita30";
$database="owner";

$_POST["username"];
$_POST["password"];


if($_POST["username"]==="sushmita" && $_POST["password"]==="pass"){
	echo"password is correct<br>";
	
	
	if(!(@mysqli_connect($host,$user,$password,$database))){
	die('connection to database is failure');
}

else{
		echo "connection successful<br>";

}
}
else{
	echo"password not correct......";
}

?>