<?php 

$host = "localhost";
$dbUser = "root";
$dbPwd = "";
$dbName = "bondhu_blood_bank";


$conn = mysqli_connect($host,$dbUser,$dbPwd,$dbName) or die(mysqli_error);

if(!$conn==true){
	echo "Connection failed!";
}


?>