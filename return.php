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
                            
<?php
	require("connect.php");
	$his_sql=mysql_query("SELECT ASS_NO FROM history WHERE Return_Date is null ORDER BY ASS_NO");
	if(empty(mysql_fetch_row($his_sql))){
		
?>
							<div class="form-group">
                                <div class="form-input">
                                    <input type="text" class="form-control" style="font-size:36px; height:70px; color:red;" name="none" value="目前未借出任何設備" readonly>
                                </div>
                            </div>		
<?php
	}else{
?>									
							
							
							
                            <div class="form-group">
                                <div class="form-input">
									<select class="form-control" style="font-size:36px; height:70px" name="assets_no" id="assets_no" onchange="myFunction()">
										<option value="empty"></option>
<?php
		$his_sql=mysql_query("SELECT ASS_NO FROM history WHERE Return_Date is null ORDER BY ASS_NO");
		for($i=1;$i<=mysql_num_rows($his_sql);$i++){
			$his_data=mysql_fetch_row($his_sql);
?>
										<option value="<?php echo $his_data[0] ?>"><?php echo $his_data[0] ?></option>
<?php
		}
?>										
<script>
function myFunction() {
    var x = document.getElementById("assets_no").value;
	if(x=="NB01"){
		<?php
			$x_sql=mysql_query("SELECT history.EMP_NO,employee.NAME FROM history,employee WHERE history.ASS_NO='NB01' AND history.Return_Date is NULL AND history.EMP_NO=employee.EMP_NO");
			$x_data=mysql_fetch_row($x_sql);
		?>
		document.getElementById("emp_no").value = "<?php echo $x_data[0] ?>";
		document.getElementById("emp_name").value = "<?php echo $x_data[1] ?>";
	}else if(x=="NB02"){
		<?php
			$x_sql=mysql_query("SELECT history.EMP_NO,employee.NAME FROM history,employee WHERE history.ASS_NO='NB02' AND history.Return_Date is NULL AND history.EMP_NO=employee.EMP_NO");
			$x_data=mysql_fetch_row($x_sql);
		?>
		document.getElementById("emp_no").value = "<?php echo $x_data[0] ?>";
		document.getElementById("emp_name").value = "<?php echo $x_data[1] ?>";
	}else if(x=="NB03"){
		<?php
			$x_sql=mysql_query("SELECT history.EMP_NO,employee.NAME FROM history,employee WHERE history.ASS_NO='NB03' AND history.Return_Date is NULL AND history.EMP_NO=employee.EMP_NO");
			$x_data=mysql_fetch_row($x_sql);
		?>
		document.getElementById("emp_no").value = "<?php echo $x_data[0] ?>";
		document.getElementById("emp_name").value = "<?php echo $x_data[1] ?>";
	}else if(x=="NB04"){
		<?php
			$x_sql=mysql_query("SELECT history.EMP_NO,employee.NAME FROM history,employee WHERE history.ASS_NO='NB04' AND history.Return_Date is NULL AND history.EMP_NO=employee.EMP_NO");
			$x_data=mysql_fetch_row($x_sql);
		?>
		document.getElementById("emp_no").value = "<?php echo $x_data[0] ?>";
		document.getElementById("emp_name").value = "<?php echo $x_data[1] ?>";
	}else if(x=="SONY01"){
		<?php
			$x_sql=mysql_query("SELECT history.EMP_NO,employee.NAME FROM history,employee WHERE history.ASS_NO='SONY01' AND history.Return_Date is NULL AND history.EMP_NO=employee.EMP_NO");
			$x_data=mysql_fetch_row($x_sql);
		?>
		document.getElementById("emp_no").value = "<?php echo $x_data[0] ?>";
		document.getElementById("emp_name").value = "<?php echo $x_data[1] ?>";
	}else if(x=="SONY02"){
		<?php
			$x_sql=mysql_query("SELECT history.EMP_NO,employee.NAME FROM history,employee WHERE history.ASS_NO='SONY02' AND history.Return_Date is NULL AND history.EMP_NO=employee.EMP_NO");
			$x_data=mysql_fetch_row($x_sql);
		?>
		document.getElementById("emp_no").value = "<?php echo $x_data[0] ?>";
		document.getElementById("emp_name").value = "<?php echo $x_data[1] ?>";
	}else if(x=="SONY03"){
		<?php
			$x_sql=mysql_query("SELECT history.EMP_NO,employee.NAME FROM history,employee WHERE history.ASS_NO='SONY03' AND history.Return_Date is NULL AND history.EMP_NO=employee.EMP_NO");
			$x_data=mysql_fetch_row($x_sql);
		?>
		document.getElementById("emp_no").value = "<?php echo $x_data[0] ?>";
		document.getElementById("emp_name").value = "<?php echo $x_data[1] ?>";
	}else if(x=="SONY04"){
		<?php
			$x_sql=mysql_query("SELECT history.EMP_NO,employee.NAME FROM history,employee WHERE history.ASS_NO='SONY04' AND history.Return_Date is NULL AND history.EMP_NO=employee.EMP_NO");
			$x_data=mysql_fetch_row($x_sql);
		?>
		document.getElementById("emp_no").value = "<?php echo $x_data[0] ?>";
		document.getElementById("emp_name").value = "<?php echo $x_data[1] ?>";
	}else if(x=="USB01"){
		<?php
			$x_sql=mysql_query("SELECT history.EMP_NO,employee.NAME FROM history,employee WHERE history.ASS_NO='USB01' AND history.Return_Date is NULL AND history.EMP_NO=employee.EMP_NO");
			$x_data=mysql_fetch_row($x_sql);
		?>
		document.getElementById("emp_no").value = "<?php echo $x_data[0] ?>";
		document.getElementById("emp_name").value = "<?php echo $x_data[1] ?>";
	}else if(x=="USB02"){
		<?php
			$x_sql=mysql_query("SELECT history.EMP_NO,employee.NAME FROM history,employee WHERE history.ASS_NO='USB02' AND history.Return_Date is NULL AND history.EMP_NO=employee.EMP_NO");
			$x_data=mysql_fetch_row($x_sql);
		?>
		document.getElementById("emp_no").value = "<?php echo $x_data[0] ?>";
		document.getElementById("emp_name").value = "<?php echo $x_data[1] ?>";
	}else if(x=="USB04"){
		<?php
			$x_sql=mysql_query("SELECT history.EMP_NO,employee.NAME FROM history,employee WHERE history.ASS_NO='USB04' AND history.Return_Date is NULL AND history.EMP_NO=employee.EMP_NO");
			$x_data=mysql_fetch_row($x_sql);
		?>
		document.getElementById("emp_no").value = "<?php echo $x_data[0] ?>";
		document.getElementById("emp_name").value = "<?php echo $x_data[1] ?>";
	}
	/*
	//如有新增設備編號，請複製以下程式碼並貼於上方。
	else if(x=="新增設備編號"){
		<?php
			$x_sql=mysql_query("SELECT  history.EMP_NO,employee.NAME FROM history,employee WHERE history.ASS_NO='新增設備編號' AND history.EMP_NO=employee.EMP_NO");
			$x_data=mysql_fetch_row($x_sql);
		?>
		document.getElementById("emp_no").value = "<?php echo $x_data[0] ?>";
		document.getElementById("emp_name").value = "<?php echo $x_data[1] ?>";
	}*/
	else{
		document.getElementById("emp_no").value = x;
		document.getElementById("emp_name").value = x;
	}	
}
</script>							
									</select>
                                </div>
							</div>	
<?php
	}
?>							
                                
			
							<div class="form-group">
                                <div class="form-input">
                                    <input type="text" class="form-control" style="font-size:36px; height:70px" name="emp_no" id="emp_no" placeholder="員工編號.." onchange="myFunction()" readonly>
                                </div>
                            </div>
							<div class="form-group">
                                <div class="form-input">
                                    <input type="text" class="form-control" style="font-size:36px; height:70px" name="emp_name" id="emp_name" placeholder="員工姓名.." onchange="myFunction()" readonly>
                                </div>
                            </div>
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