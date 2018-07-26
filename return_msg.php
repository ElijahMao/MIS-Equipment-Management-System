<?php
	date_default_timezone_set("Asia/Taipei");
	require("connect.php");
	
	$emp_no=$_POST['emp_no'];
	$emp_name=$_POST['emp_name'];
	
	$assets_no=$_POST['assets_no'];
	$assets_sql=mysql_query("select * from assets where ASS_NO='$assets_no'");
	$assets_data=mysql_fetch_row($assets_sql);
	
	if(empty($assets_data)){
		echo "<script>";
		echo "alert('未選擇要歸還的設備編號，請重新輸入！');";
		echo "location.href='../return.php'";
		echo "</script>";
	}else{
		$datetime = date ("Y-m-d H:i:s"); 
		$history_update_sql=mysql_query("UPDATE history SET Return_Date = '$datetime' WHERE history.ASS_NO ='$assets_no' AND history.Return_Date IS NULL");
		$assets_update_sql=mysql_query("UPDATE assets SET IN_STUCK = 'YES' WHERE assets.ASS_NO = '$assets_no'");
		echo "<script>";
		echo "alert('員工編號：$emp_no\\n員工姓名：$emp_name\\n設備編號：$assets_no\\n歸還時間：$datetime\\n歸還成功！');";
		echo "location.href='../mis.php'";
		echo "</script>";
	}
?>