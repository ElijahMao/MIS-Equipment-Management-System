<?php
	if(empty($_POST['emp_no'])){
		echo "<script>";
		echo "alert('員工編號不可為空值，請重新輸入！');";
		echo "location.href='http://localhost/borrow.html'";
		echo "</script>";
	}else{
		require("connect.php");
		
		$emp_no=substr($_POST['emp_no'],-8);
		$emp_sql=mysql_query("select * from employee where EMP_NO='$emp_no'");
		$emp_data=mysql_fetch_row($emp_sql);
		
		if(empty($emp_data)){
			echo "<script>";
			echo "alert('查無此員工編號 $emp_no\\n請重新輸入！');";
			echo "location.href='http://localhost/borrow.html'";
			echo "</script>";
		}
	}
?>
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
    <title>借出設備</title>

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
			<td height="200px" align="center">
				<div class="contact-title wow fadeIn">
                       <h3 class="font28 mb50 xs-mb30 xs-font22 xs-mt20">借出設備</h3>
                </div>
			</td>
		<tr>
			<td align="center">
				<div class="contact-form wow fadeIn">
                    <form action="borrow_msg.php" method="post">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="form-input">
                                        <input type="text" class="form-control" name="emp_no" value="<?php echo $emp_data[0] ?>" readonly>
                                    </div>
                                </div>
                            </div>
							<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="form-input">
                                        <input type="text" class="form-control" name="emp_name" value="<?php echo $emp_data[1] ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="form-input">
										<select class="form-control" name="assets_no">
　											<option value="none">請選擇設備編號</option>
												<optgroup label="筆記型電腦區">
<?php
	$ass_sql=mysql_query("select ASS_NO from assets where ASS_NO like 'NB%' and IN_STUCK ='YES'");
	for($i=1;$i<=mysql_num_rows($ass_sql);$i++){
		$ass_data=mysql_fetch_row($ass_sql);
?>													
													<option value="<?php echo $ass_data[0] ?>"><?php echo $ass_data[0] ?></option>
<?php
	
	}
?>	
												<optgroup label="數位相機區">
<?php
	$ass_sql=mysql_query("select ASS_NO from assets where ASS_NO like 'SONY%' and IN_STUCK ='YES'");
	for($i=1;$i<=mysql_num_rows($ass_sql);$i++){
		$ass_data=mysql_fetch_row($ass_sql);
?>													
													<option value="<?php echo $ass_data[0] ?>"><?php echo $ass_data[0] ?></option>
<?php
	
	}
?>
												<optgroup label="儲存設備區">
<?php
	$ass_sql=mysql_query("select ASS_NO from assets where ASS_NO like 'USB%' and IN_STUCK ='YES'");
	for($i=1;$i<=mysql_num_rows($ass_sql);$i++){
		$ass_data=mysql_fetch_row($ass_sql);
?>													
													<option value="<?php echo $ass_data[0] ?>"><?php echo $ass_data[0] ?></option>
<?php
	
	}
?>												
										</select>
                                    </div>
									
                                </div>
                            </div>
							<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="form-group mb0">
                                    <button type="submit">確定</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
			</td>
		</tr>
	</table>
</body>
</html>