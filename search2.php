
<?php include "db_connect.php"; ?>

<!DOCTYPE html>
<html class="no-js" lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>????? ????? ??????</title>

        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon.png" />
		<link rel="stylesheet" type="text/css" href="https://datatables.net/examples/data_sources/js_array">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  
        <!-- Stylesheet -->
        <!-- Fontawesome CSS -->
        <!-- <link rel="stylesheet" href="assets/css/fontawesome-all.min.css"> -->
        <script src="https://use.fontawesome.com/c08c022230.js"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <!-- Owl Carousel css -->
        <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css" media="all" />
        <!-- normalize -->
        <link rel="stylesheet" href="assets/css/normalize.css" />
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Xanh+Mono&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet" />
        <!-- Main Stylesheet -->

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/default.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />

        <!-- Global site tag (gtag.js) - Google Analytics -->


        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script>
            window.fbAsyncInit = function () {
                FB.init({
                    xfbml: true,
                    version: "v6.0",
                });
            };

            (function (d, s, id) {
                var js,
                    fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
                fjs.parentNode.insertBefore(js, fjs);
            })(document, "script", "facebook-jssdk");
        </script>

        <!-- Your customer chat code -->
        <!--       <div class="fb-customerchat"
        attribution=setup_tool
        page_id="105201280823180"
  theme_color="#00A5FF"
  logged_in_greeting=" "
  logged_out_greeting=" ">
      </div> -->

        <script data-ad-client="ca-pub-4331100589850935" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    </head>
    <body>
        <section class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-4">
                        <div class="logo_area">
                            <h2>
                                <a href="/">
                                    <img src="assets/images/logo.png" alt="" /> <span>?????????</span>
                                    <img src="assets/img/logo.png" alt="" />
                                </a>
                            </h2>
                        </div>
                        <div class="nav_icon">
                            <a class="nav-bars" href="#"><i class="fas fa-bars"></i></a>
                            <a class="nav-bars" href="#">Menu</a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-md-8">
                        <div class="header_menu_area">
                            <ul>
                                <li><a class="active" href="/">???</a></li>
                                <li><a href="/thalassemia">?????????????</a></li>
                                <li><a href="/volunteers">????????????</a></li>
                                <li><a href="/sohojogi">?????? ?????</a></li>
                                <li><a href="/blog">????</a></li>
                                <li><a href="/login">???? </a></li>
                                <li><a href="/registration">????????????</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
if(isset($_REQUEST["group"]) && isset($_REQUEST["district"])){	
$bGroup = $_REQUEST["group"];	
$district = $_REQUEST["district"];	
?>
		<div class="container">
			<div class="row">
			<div class="col-md-12">
				<div class="bloodGroup">
					<div class="Bgroup">
						<?php echo $bGroup; ?> ?????????? ??????
					</div>	
				</div>
			</div>
			</div>
		</div>
<div class="container">
	<div class="row">
<?php 
include "db_connect.php";


$showDataQuery = ("SELECT * FROM `registration` WHERE `group` LIKE '%$bGroup%' AND `current_district` LIKE '%$district%'");

$runQuery = mysqli_query($conn,$showDataQuery);
$queryCount = mysqli_num_rows($runQuery);

$serial = 1;
if($runQuery==true){
if($_SERVER["REQUEST_METHOD"]== "POST"){
	if(empty($queryCount)){
		
		echo "<font color='red'>?? ????? ?? ??? ???? ?????? ???? ????? ?????? ?? ? </font>";
		echo "<br/>";
		echo "<br/>";
		
	}else{	
?>		
		

			<table id="table_id" class="display">
                    <thead class="">
                        <tr>
                            <th>??</th>
                            <th">???</th>
                            <th">??????</th>
                            <th">??????? </th>
                            <th">??????? ???????</th>
							
                        </tr>
					</thead>


<?php 

while($mydata=mysqli_fetch_array($runQuery)){?>

                    <tbody>
                        <tr>
                            <td class="text-center align-middle"><?php echo $serial;$serial++; ?></td>
                            <td class="text-center align-middle"><?php echo $mydata["name"]; ?></td>
                            <td class="text-center align-middle">
							<?php
								echo "?????  <b>".$mydata["district"]."</b>";
								echo "<br/>";
								echo "??????? <b> ".$mydata["address"]."</b>"; 
								echo "<br/>";
								echo "??????? ?????  <b>".$mydata["current_district"]."</b>"; 
								
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
                    </tbody>

<?php	}  ?>
                </table>

<?php }}}}?>
            </div>
        </div>

        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-6 col-12">
                        <div class="footer-left">
                            <p>© 2018-2022 ????????? || all Right reserved</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-6 col-12">
                        <div class="footer-right">
                            <p>Developed By <a target="_blank" href="https://sumonali.com"> Sumon</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

        <!-- Js Files -->
        <!-- modernizr -->
        <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <!-- jQuery -->
        <script type="text/javascript" src="assets/js/vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap Popper -->
        <script src="assets/js/popper.js"></script>
        <!-- Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Owl Carousel JS -->
        <script src="assets/js/config.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/jquery.emojiarea.js"></script>
        <script src="assets/js/emoji-picker.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <script src="assets/js/html2canvas.min.js"></script>
        <!-- Custom Scripts -->
        <script src="assets/js/main.js"></script>
        <script src="assets/js/inna.js"></script>
        <script>
            $(function () {
                $("#birthday").datepicker({
                    changeMonth: true,
                    changeYear: true,
                    dateFormat: "yy-mm-dd",
                });
            });
        </script>
        <script>
            $(".eye_btn").click(function () {
                $(".hide_box").show();
                return false;
            });

            $("#code").keyup(function () {
                var code = $("#code").val();
                var uid = $("#uid").val();
                $.ajax({
                    url: "ajaxRequest.php",
                    type: "POST",
                    data: {
                        code: code,
                        uid: uid,
                    },
                    success: function (data3) {
                        $("#showN").html(data3);
                        $(".x_number").hide();
                    },
                });
            });
        </script>
	

        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".district").select2();
            });
        </script>
		
		<script type="text/javascript">
			$(document).ready(function () {
    $('#example').DataTable({
        data: dataSet,
        columns: [
            { title: 'Name' },
            { title: 'Position' },
            { title: 'Office' },
            { title: 'Extn.' },
            { title: 'Start date' },
            { title: 'Salary' },
        ],
    });
});
		</script>
		
		
    </body>
</html>
