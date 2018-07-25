<?php
	require("connect.php");
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <!--====== USEFULL META ======-->
	<meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="APPTON HTML5 Template is a simple Smooth Personal App Landing Template" />
    <meta name="keywords" content="App, Landing, Business, Onepage, Html, Business" />

    <!--====== TITLE TAG ======-->
    <title>MIS資訊設備管理系統</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="assest/img/favicon.jpg" />

    <!--====== STYLESHEETS ======-->
    <link href="assest/css/plugins.css" rel="stylesheet">
    <link href="assest/css/theme.css" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="style.css" rel="stylesheet">

	<script language="JavaScript">
		function ShowTime(){
			var Now = new Date();
			document.getElementById('showbox').innerHTML = '現在時間：' + Now.toLocaleString();
			setTimeout('ShowTime()',1000);
		}
	</script>
</head>

<body data-spy="scroll" data-target=".mainmenu-area" data-offset="90" onload="ShowTime()">
    <!--- PRELOADER-->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    <!--START TOP AREA-->
    <header class="top-area" id="home">
        <!--WELCOME SLIDER AREA-->
        <div class="white font16">
            <div class="welcome-single-slide">
                <div class="slide-bg-one slide-bg-overlay"></div><br>
                <div class="container">
                    <div class="col-md-8 col-lg-7 col-sm-12 col-xs-12">
                        <div class="welcome-text">
							<p><h1>MIS資訊設備管理系統</h1></p>
							<div class="enroll-button">
										<a href="../borrow.html">借出設備</a>&nbsp;
										<a href="../return.html">歸還設備</a>
							</div><br>
							<div id="showbox"></div><br>
							<div>
								<table style="color:black; background-color:white; border:3px #31dc89 outset; font-size:36px;"  border='10' align="center" width="180%">
									<tr style="background-color:#66FF66">
										<td align="center" height="48px"><b>可外借之設備清單</b></td>
									</tr>
<?php
	$ass_sql=mysql_query("select ASS_NO from assets where ASS_NO like 'NB%' and IN_STUCK='YES'");
	$area=mysql_fetch_row($ass_sql);
	if(empty($area)==false){
?>									
									<tr style="background-color:#99FF99">
										<td align="center" height="40px">筆記型電腦區</td>
									</tr>
									
<?php
	}
	$ass_sql=mysql_query("select ASS_NO from assets where ASS_NO like 'NB%' and IN_STUCK='YES'");
	for($i=1;$i<=mysql_num_rows($ass_sql);$i++){
		$ass_data=mysql_fetch_row($ass_sql);
?>									
									<tr>
										<td align="center" height="40px"><?php echo $ass_data[0]?></td>
									</tr>
<?php
	}
	$ass_sql=mysql_query("select ASS_NO from assets where ASS_NO like 'SONY%' and IN_STUCK='YES'");
	$area=mysql_fetch_row($ass_sql);
	if(empty($area)==false){
?>									
									<tr style="background-color:#99FF99">
										<td align="center" height="40px">數位相機區</td>
									</tr>
									
<?php
	}
	$ass_sql=mysql_query("select ASS_NO from assets where ASS_NO like 'SONY%' and IN_STUCK='YES'");
	for($i=1;$i<=mysql_num_rows($ass_sql);$i++){
		$ass_data=mysql_fetch_row($ass_sql);
?>									
									<tr>
										<td align="center" height="40px"><?php echo $ass_data[0]?></td>
									</tr>
<?php
	}
	$ass_sql=mysql_query("select ASS_NO from assets where ASS_NO like 'USB%' and IN_STUCK='YES'");
	$area=mysql_fetch_row($ass_sql);
	if(empty($area)==false){
?>									
									<tr style="background-color:#99FF99">
										<td align="center" height="40px">儲存設備區</td>
									</tr>
									
<?php
	}
	$ass_sql=mysql_query("select ASS_NO from assets where ASS_NO like 'USB%' and IN_STUCK='YES'");
	for($i=1;$i<=mysql_num_rows($ass_sql);$i++){
		$ass_data=mysql_fetch_row($ass_sql);
?>									
									<tr>
										<td align="center" height="40px"><?php echo $ass_data[0]?></td>
									</tr>
<?php
	}
?>
								</table>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--WELCOME SLIDER AREA END-->
    </header>
    <!--END TOP AREA-->

    <!--FOOER AREA-->
    <footer class="footer-area sky-gray-bg relative">
        <div class="footer-bottom-area white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="footer-copyright text-center wow fadeIn">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--FOOER AREA END-->

    <!--====== SCRIPTS JS ======-->
    <script src="assest/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== PLUGINS JS ======-->
    <script src="assest/js/owl.carousel.min.js"></script>
    <script src="assest/js/stellar.js"></script>
    <script src="assest/js/jquery.counterup.min.js"></script>
    <script src="assest/js/wow.min.js"></script>
    <script src="assest/js/jquery-modal-video.min.js"></script>
    <script src="assest/js/stellarnav.min.js"></script>
    <script src="assest/js/placeholdem.min.js"></script>
    <script src="assest/js/jquery.ajaxchimp.js"></script>
    <script src="assest/js/jquery.sticky.js"></script>

    <!--===== ACTIVE JS=====-->
    <script src="assest/js/main.js"></script>
</body>
</html>