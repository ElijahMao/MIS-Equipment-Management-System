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
										<a href="http://localhost/borrow.html">借出設備</a>&nbsp;
										<a href="http://localhost/return.html">歸還設備</a>&nbsp;
										<a href="http://localhost/history.php" target="_blank">歷史紀錄</a>
							</div><br>
							<div id="showbox"></div><br>
							<div>
								<table style="color:black; background-color:white; border:3px #31dc89 outset; font-size:24px;"  border='10' align="center" width="180%">
									<tr style="background-color:#66FF66">
										<td align="center" height="36px" colspan="4">筆記型電腦區</td>
									</tr>
									<tr style="background-color:#99FF99">
										<td align="center" height="36px">設備編號</td>
										<td align="center">設備狀態</td>
										<td align="center">員工姓名</td>
										<td align="center">借出時間</td>
									</tr>
<?php
	$data=mysql_query("select ASS_NO,IN_STUCK from assets where ASS_NO like 'NB%'");
	for($i=1;$i<=mysql_num_rows($data);$i++){
		$rs=mysql_fetch_row($data);
		if($rs[1]==YES){
?>									
									<tr>
										<td align="center" height="36px"><?php echo $rs[0]?></td>
										<td align="center">在架上</td>
										<td align="center">-</td>
										<td align="center">-</td>
									</tr>
<?php
		}
		else if($rs[1]==NO){
			$data2=mysql_query("select employee.NAME,history.BORROW_DATE from employee,history,assets where history.EMP_NO=employee.EMP_NO and history.ASS_NO='$rs[0]' ORDER by RETURN_DATE LIMIT 1");
				$rs2=mysql_fetch_row($data2);
?>
									<tr bgcolor="gray">
										<td align="center" height="36px"><font color="white"><?php echo $rs[0]?></font></td>
										<td align="center"><font color="white">借出中</font></td>
										<td align="center"><font color="white"><?php echo $rs2[0]?></font></td>
										<td align="center"><font color="white"><?php echo $rs2[1]?></font></td>
									</tr>
<?php
		}		
	}
?>
									<tr style="background-color:#66FF66">
										<td align="center" height="36px" colspan="4">數位相機區</td>
									</tr>
									<tr style="background-color:#99FF99">
										<td align="center" height="36px">設備編號</td>
										<td align="center">設備狀態</td>
										<td align="center">員工姓名</td>
										<td align="center">借出時間</td>
									</tr>
<?php
	$data=mysql_query("select ASS_NO,IN_STUCK from assets where ASS_NO like 'SONY%'");
	for($i=1;$i<=mysql_num_rows($data);$i++){
		$rs=mysql_fetch_row($data);
		if($rs[1]==YES){
?>									
									<tr>
										<td align="center" height="36px"><?php echo $rs[0]?></td>
										<td align="center">在架上</td>
										<td align="center">-</td>
										<td align="center">-</td>
									</tr>
<?php
		}
		else if($rs[1]==NO){
			$data2=mysql_query("select employee.NAME,history.BORROW_DATE from employee,history,assets where history.EMP_NO=employee.EMP_NO and history.ASS_NO='$rs[0]' ORDER by RETURN_DATE LIMIT 1");
				$rs2=mysql_fetch_row($data2);
?>
									<tr bgcolor="gray">
										<td align="center" height="36px"><font color="white"><?php echo $rs[0]?></font></td>
										<td align="center"><font color="white">借出中</font></td>
										<td align="center"><font color="white"><?php echo $rs2[0]?></font></td>
										<td align="center"><font color="white"><?php echo $rs2[1]?></font></td>
									</tr>
<?php
		}		
	}
?>									
									<tr style="background-color:#66FF66">
										<td align="center" height="36px" colspan="4">儲存設備區</td>
									</tr>
									<tr style="background-color:#99FF99">
										<td align="center" height="36px">設備編號</td>
										<td align="center">設備狀態</td>
										<td align="center">員工姓名</td>
										<td align="center">借出時間</td>
									</tr>
<?php
	$data=mysql_query("select ASS_NO,IN_STUCK from assets where ASS_NO like 'USB%'");
	for($i=1;$i<=mysql_num_rows($data);$i++){
		$rs=mysql_fetch_row($data);
		if($rs[1]==YES){
?>									
									<tr>
										<td align="center" height="36px"><?php echo $rs[0]?></td>
										<td align="center">在架上</td>
										<td align="center">-</td>
										<td align="center">-</td>
									</tr>
<?php
		}
		else if($rs[1]==NO){
			$data2=mysql_query("select employee.NAME,history.BORROW_DATE from employee,history,assets where history.EMP_NO=employee.EMP_NO and history.ASS_NO='$rs[0]' ORDER by RETURN_DATE LIMIT 1");
				$rs2=mysql_fetch_row($data2);
?>
									<tr bgcolor="gray">
										<td align="center" height="36px"><font color="white"><?php echo $rs[0]?></td>
										<td align="center"><font color="white">借出中</td>
										<td align="center"><font color="white"><?php echo $rs2[0]?></td>
										<td align="center"><font color="white"><?php echo $rs2[1]?></td>
									</tr>
<?php
		}		
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