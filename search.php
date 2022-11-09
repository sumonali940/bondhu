<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/style.css" />
				<!-- Fontawesome CSS -->
        <!-- <link rel="stylesheet" href="assets/css/fontawesome-all.min.css"> -->
        <script src="https://use.fontawesome.com/c08c022230.js"></script>

		<!-- Owl Carousel css -->
		<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css" media="all" />
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css" media="all" />
		<!-- normalize -->
        <link rel="stylesheet" href="assets/css/normalize.css">
			<!-- Google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" rel="stylesheet"> 
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Xanh+Mono&display=swap" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet"> 
		<!-- Main Stylesheet -->
		
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/default.css">
        <link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
		<title>বন্ধু ব্লাড ব্যাংক </title>

    </head>

<body>
		<section class="header-area">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-md-4">
						<div class="logo_area">
							<h2> <a href="/">
								<!-- <img src="assets/images/logo.png" alt="" /> <span>রক্তবন্ধু</span>   -->
								<img src="assets/img/logo.png" alt="" />
							</a></h2>
						</div>
						<div class="nav_icon"> 
							<!-- <a class="nav-bars" href="#"><i class="fas fa-bars"></i></a> -->
							<a class="nav-bars" href="#">Menu</a>
						</div>
					</div>
					<div class="col-xl-8 col-md-8"> 
						<div class="header_menu_area"> 
							<ul>
								<li><a class="active" href="/index.php" >হোম</a></li>
								<li><a href="/thalassemia.php">থ্যালাসেমিয়া</a></li>
								<li><a href="/volunteers.php">ভলান্টিয়ার্স</a></li>
								<li><a href="/sohojogi.php">সহযোগী সংগঠন</a></li>
								
								<li><a href="/login.php">লগইন </a></li>
								<li><a href="/registration.php">রেজিস্ট্রেশন</a></li> 
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>	
<div class="container">
	<div class="card">
	<div class="card-header text-center"><div class="shortBG"><?php $bGroup = $_REQUEST["group"]; echo $bGroup; ?> রক্তবন্ধুর তালিকা </div></div>
	<div class="card-body">
<?php
include "db_connect.php";
if(isset($_REQUEST["group"]) && isset($_REQUEST["district"])){	
$bGroup = $_REQUEST["group"];	
$district = $_REQUEST["district"];	


$showDataQuery = ("SELECT * FROM `registration` WHERE `group` LIKE '%$bGroup%' AND `current_district` LIKE '%$district%'");

$runQuery = mysqli_query($conn,$showDataQuery);
$queryCount = mysqli_num_rows($runQuery);

$serial = 1;
if($runQuery==true){
if($_SERVER["REQUEST_METHOD"]== "GET"){
	if(empty($queryCount)){
		
		echo "<font color='red'><center>কোন রক্ত বন্ধু পাওয়া যায়নি । </center></font>";
		echo "<br/>";
		echo "<br/>";
		
	}else{	
?>	
		<table id="datatable" class="table table-striped table-bordered">
			<thead class="bg-">
				<tr>
					<th class="text-center">নং</th>
					<th class="text-center">নাম </th>
					<th class="text-center">ঠিকানা</th>
					<th class="text-center">মোবাইল </th>
					<th class="text-center">সর্বশেষ রক্ত দান </th>
				</tr>
			</thead>
			<tbody>
<?php			
while($mydata=mysqli_fetch_array($runQuery)){?>
		
			<tr>
				<td class="text-center align-middle"><?php echo $serial;$serial++; ?></td>
				<td class="text-center align-middle"><?php echo $mydata["name"]; ?></td>
				<td class="text-center align-middle">
				<?php
					echo "<h6><font color='blue'>ঠিকানাঃ </font><b> ".$mydata["address"]."</b></h6>"; 
					echo "<br/>";
					echo "<font color='tomato'>নিজ জেলাঃ</font>  <b>".$mydata["district"]."</b>";
					echo "<br/>";
					echo "<font color='#ff29e6'>বর্তমান জেলাঃ </font> <b>".$mydata["current_district"]."</b>"; 
					
				?>
				</td>
				<td class="text-center align-middle text-success"><?php echo $mydata["mobile"]; ?></td>
				<td class="text-center align-middle text-danger">
				<?php
					echo "<b>".$mydata["blood_day"]."</b>";
					echo "/";
					echo "<b>".$mydata["bl_month"]."</b>";
					echo "/";
					echo "<b>".$mydata["bl_year"]."</b>";
				?>
				</td>

			</tr>
		
<?php	}  ?>
</tbody>
</table>

<?php }}}}else{
	header("location: index.php");
	
}?>
		</div>
	  </div>
	</div>
<script>
	$(document).ready(function () {
		$("#datatable").dataTable();
	});
</script>
 
 <?php include "footer.php"; ?>