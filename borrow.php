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
			echo "alert('無此員工編號，請重新輸入！');";
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
                       <font size="48px">借出設備</font>
                </div>
			</td>
		<tr>
			<td align="center">
				<div class="contact-form">
                    <form action="borrow_msg.php" method="post">
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
                            <div class="form-group">
                                <div class="form-input">
								    <input type="text" class="form-control" style="font-size:36px" name="ass_no" placeholder="設備編號.." autofocus maxlength="6">
                                </div>
							</div>
							<div class="form-group mb0">
								<button type="button" onclick="javascript:location.href='http://localhost/mis.php'">回首頁</button>
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