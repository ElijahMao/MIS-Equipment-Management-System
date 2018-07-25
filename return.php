<?php
	if(empty($_POST['emp_no'])){
		echo "<script>";
		echo "alert('員工編號不可為空值，請重新輸入！');";
		echo "location.href='../return.html'";
		echo "</script>";
	}else{
		require("connect.php");
		
		$emp_no=substr($_POST['emp_no'],-8);
		$emp_sql=mysql_query("select * from employee where EMP_NO='$emp_no'");
		$emp_data=mysql_fetch_row($emp_sql);
		
		if(empty($emp_data)){
			echo "<script>";
			echo "alert('無此員工編號，請重新輸入！');";
			echo "location.href='../return.html'";
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
    <title>歸還設備</title>

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
                       <font size="48px">歸還設備</font>
                </div>
			</td>
		<tr>
			<td align="center">
				<div class="contact-form">
                    <form action="return_msg.php" method="post">
                        <div class="row">
                            <div class="form-group">
                                <div class="form-input">
                                    <input type="text" class="form-control" style="font-size:36px" name="emp_no" value="<?php echo $emp_data[0] ?>" readonly>
                                </div>
                            </div>
							<div class="form-group">
                                <div class="form-input">
                                    <input type="text" class="form-control" style="font-size:36px" name="emp_name" value="<?php echo $emp_data[1] ?>" readonly>
                                </div>
                            </div>		
							
<?php
	$his_sql=mysql_query("SELECT ASS_NO FROM history WHERE EMP_NO='$emp_no' AND Return_Date is null ORDER BY ASS_NO");
	if(empty(mysql_fetch_row($his_sql))){
		
?>
							<div class="form-group">
                                <div class="form-input">
                                    <input type="text" class="form-control" style="font-size:36px; color:red;" name="none" value="您未借出任何設備" readonly>
                                </div>
                            </div>		
<?php
	}else{
?>									
							
							
							
                            <div class="form-group">
                                <div class="form-input">
									<select class="form-control" style="font-size:36px; height:58px" name="assets_no">
<?php
		$his_sql=mysql_query("SELECT ASS_NO FROM history WHERE EMP_NO='$emp_no' AND Return_Date is null ORDER BY ASS_NO");
		for($i=1;$i<=mysql_num_rows($his_sql);$i++){
			$his_data=mysql_fetch_row($his_sql);
?>
										<option value="<?php echo $his_data[0] ?>"><?php echo $his_data[0] ?></option>
<?php
		}
?>					

									</select>
                                </div>
							</div>
<?php
	}
?>	
							<div class="form-group mb0">
								<button type="button" onclick="javascript:location.href='../mis.php'">回首頁</button>
                                <button type="submit">確定</button>
                            </div>
                        </div>
                    </form>
                </div>
			</td>
		</tr>
	</table>
</body>
</html>