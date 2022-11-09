<?php 

include "db_connect.php";

$pName = $_REQUEST["tp_name"];
$pBlGroup = $_REQUEST["tp_blood_group"];
$pZila = $_REQUEST["tp_zila"];
$pThana = $_REQUEST["tp_thana"];
$pVillage = $_REQUEST["tp_village"];
$pFname = $_REQUEST["tp_guardian"];
$pContactNumper = $_REQUEST["tp_contact_number"];
$infoName = $_REQUEST["tp_submit_name"];
$infoNumber = $_REQUEST["tp_submit_mobile"];


$pInfoInsert = "INSERT INTO `thalassemia`(`name`, `blood`, `district`,`thana`, `village`, `fname`, `mobile`, `infoname`, `infomobile`) VALUES ('$pName','$pBlGroup','$pZila','$pThana','$pVillage','$pFname','$pContactNumper','$infoName','$infoNumber')";

$pInfoQuery = mysqli_query($conn,$pInfoInsert);

if($pInfoQuery == true){
	header("location: thalassemia.php?patient_insert");
}else{
	echo "Data is not submit";
};


?>