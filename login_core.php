<?php 

include "db_connect.php";

$mobile = $_REQUEST["username"];
$pwd = $_REQUEST["password"];
$getCookie = md5(sha1($mobile,$pwd));


$getUpdate = "SELECT * FROM registration WHERE (mobile,pwd) = ('$mobile','$pwd')";
$getRunQuery = mysqli_query($conn,$getUpdate);
$checkCount = mysqli_num_rows($getRunQuery);

if($getRunQuery==true){
	if($checkCount===1){
		setcookie("Blood_Bank",$getCookie,time()+(86400*7));
		header("location: index.php");
	}else{
		header("location: login.php?login_faild");
	}
}


?>