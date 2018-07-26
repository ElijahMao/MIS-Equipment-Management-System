<?php
	date_default_timezone_set("Asia/Taipei");
	require("connect.php");
	
	$emp_no=$_POST['emp_no'];
	$emp_name=$_POST['emp_name'];
	
	$assets_no=$_POST['ass_no'];
	$assets_sql=mysql_query("select * from assets where ASS_NO='$assets_no'");
	$assets_data=mysql_fetch_row($assets_sql);
	
	if(empty($_POST['ass_no'])){
		echo "<script>";
		echo "alert('設備編號不可為空值，請重新輸入！');";
		echo "location.href='../borrow.html'";
		echo "</script>";
	}else if(empty($assets_data)){
		echo "<script>";
		echo "alert('無此設備編號，請重新輸入！');";
		echo "location.href='../borrow.html'";
		echo "</script>";
	}else if($assets_data[3]=="NO"){
		echo "<script>";
		echo "alert('此設備已被借出，請聯絡資訊人員！');";
		echo "location.href='../mis.php'";
		echo "</script>";
	}else{
		$datetime = date ("Y-m-d H:i:s"); 
		$history_insert_sql=mysql_query("INSERT INTO history (EMP_NO, ASS_NO, Borrow_Date, Return_Date) VALUES ('$emp_no', '$assets_no', '$datetime', NULL)");
		$assets_update_sql=mysql_query("UPDATE assets SET IN_STUCK = 'NO' WHERE assets.ASS_NO = '$assets_no'");
		echo "<script>";
		echo "alert('員工編號：$emp_no\\n員工姓名：$emp_name\\n設備編號：$assets_no\\n借出時間：$datetime\\n借出成功！');";
		echo "location.href='../mis.php'";
		echo "</script>";
	}
?>