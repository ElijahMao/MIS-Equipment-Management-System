<?php
	date_default_timezone_set("Asia/Taipei");
	/*
	echo $_POST['emp_no'];
	echo "<br>";
	echo $_POST['assets_no'];
	echo "<br>";
	
	if(($_POST['emp_no'])=="員工編號.."){
		echo "<script>";
		echo "alert('員工編號不可為空值，請重新輸入！');";
		echo "location.href='http://localhost/return.html'";
		echo "</script>";
	}else if(($_POST['assets_no'])=="設備編號.."){
		echo "<script>";
		echo "alert('設備編號不可為空值，請重新輸入！');";
		echo "location.href='http://localhost/return.html'";
		echo "</script>";
	}
	*/
	if(empty($_POST['emp_no'])){
		echo "<script>";
		echo "alert('員工編號不可為空值，請重新輸入！');";
		echo "location.href='http://localhost/return.html'";
		echo "</script>";
	}else if(empty($_POST['assets_no'])){
		echo "<script>";
		echo "alert('設備編號不可為空值，請重新輸入！');";
		echo "location.href='http://localhost/return.html'";
		echo "</script>";
	}
	
	else{
		require("connect.php");
		
		$emp_no=$_POST['emp_no'];
		//$emp_no=substr($_POST['emp_no'],3,10);
		$emp_sql=mysql_query("select * from employee where EMP_NO='$emp_no'");
		$emp_data=mysql_fetch_row($emp_sql);
		
		$assets_no=$_POST['assets_no'];
		$assets_sql=mysql_query("select * from assets where ASS_NO='$assets_no'");
		$assets_data=mysql_fetch_row($assets_sql);
		
		if(empty($emp_data)){
			echo "<script>";
			echo "alert('無此員工編號，請重新輸入！');";
			echo "location.href='http://localhost/return.html'";
			echo "</script>";
		}else if(empty($assets_data)){
			echo "<script>";
			echo "alert('無此設備編號，請重新輸入！');";
			echo "location.href='http://localhost/return.html'";
			echo "</script>";
		}else if($assets_data[3]=="YES"){
			echo "<script>";
			echo "alert('此設備未被借出，請聯絡資訊人員！');";
			echo "location.href='http://localhost/mis.php'";
			//echo "window.close();";
			echo "</script>";
		}else{
			$datetime = date ("Y-m-d H:i:s");
			$history_update_sql=mysql_query("UPDATE history SET Return_Date = '$datetime' WHERE history.ASS_NO ='$assets_no' AND history.Return_Date IS NULL");
			$assets_update_sql=mysql_query("UPDATE assets SET IN_STUCK = 'YES' WHERE assets.ASS_NO = '$assets_no'");
			echo "<script>";
			echo "alert('歸還成功！');";
			echo "location.href='http://localhost/mis.php'";
			//echo "window.close();";
			echo "</script>";
		}
	}
	
?>