<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="APPTON HTML5 Template is a simple Smooth Personal App Landing Template" />
    <meta name="keywords" content="App, Landing, Business, Onepage, Html, Business" />

    <!--====== TITLE TAG ======-->
    <title>歷史紀錄</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="assest/img/favicon.jpg" />

    <!--====== STYLESHEETS ======-->
    <link href="assest/css/plugins.css" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="style.css" rel="stylesheet">
</head>

<body background="/assest/img/slider/slide_2.jpg">
	<table align="center">
		<tr>
			<td height="200px" align="center" colspan="5">
				<div class="contact-title wow fadeIn">
                       <font size="48px">歷史紀錄</font>
                </div>
			</td>
		</tr>
	</table>
	<table style="background-color:white; border:3px #31dc89 outset; font-size:24px;"  border='1' align="center" width="70%">
		<tr style="background-color:#99FF99">
			<td align="center" height="36px" width="18%">員工編號</td>
			<td align="center" width="16%">員工姓名</td>
			<td align="center" width="16%">設備編號</td>
			<td align="center" width="25%">借出日期</td>
			<td align="center" width="25%">歸還日期</td>
		</tr>
<?php
	require("connect.php");
	$data=mysql_query("select history.EMP_NO,employee.NAME,history.ASS_NO,history.BORROW_DATE,history.RETURN_Date from history,employee where history.EMP_NO=employee.EMP_NO ORDER BY RETURN_Date LIMIT 10;");
	for($i=1;$i<=mysql_num_rows($data);$i++){
		$rs=mysql_fetch_row($data);
?>
		<tr>
			<td align="center" height="36px"><?php echo $rs[0]?></td>
			<td align="center"><?php echo $rs[1]?></td>
			<td align="center"><?php echo $rs[2]?></td>
			<td align="center"><?php echo $rs[3]?></td>
			<td align="center"><?php echo $rs[4]?></td>
		</tr>
<?php
	}
?>
	</table>
	<br>
	<table align="center">
		<tr>
			<td>
				<div class="contact-form">
					<button type="button" onclick="javascript:location.href='../view.php'">回首頁</button>
				</div>
			</td>	
		</tr>	
	</table>	
</body>
</html>