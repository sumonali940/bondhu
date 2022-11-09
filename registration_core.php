<?php 

include "db_connect.php";

$name = $_REQUEST["name"];
$district = $_REQUEST["s_district"];
$address = $_REQUEST["s_address"];
$currentDistrict = $_REQUEST["district"];
$currentAddress = $_REQUEST["address"];
$email = $_REQUEST["email"];
$mobile = $_REQUEST["mobile"];
$blGroup = $_REQUEST["blood_group"];
$blDay = $_REQUEST["last_day"];
$blMonth = $_REQUEST["last_month"];
$blYear = $_REQUEST["last_year"];
$gender = $_REQUEST["gender"];
$age = $_REQUEST["birthday"];
$pwd = $_REQUEST["password"];
$cpwd = $_REQUEST["confirm_password"];
$facebook = $_REQUEST["facebook"];



$insertRegister = "INSERT INTO `registration`(`name`, `district`, `address`, `current_district`, `current_address`, `email`, `mobile`, `group`, `blood_day`, `bl_month`, `bl_year`, `gender`, `age`, `pwd`, `facebook`) VALUES ('$name','$district','$address','$currentDistrict','$currentAddress','$email','$mobile','$blGroup','$blDay','$blMonth','$blYear','$gender','$age','$cpwd','$facebook')";

$insertRunQuery = mysqli_query($conn,$insertRegister);

if($insertRunQuery == true){
	header("location: registration.php?data_insert");
}else{
	echo "Data not insert";
}


?>