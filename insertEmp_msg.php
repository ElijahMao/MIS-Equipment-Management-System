<?php
	if(empty($_POST['emp_no'])){
		echo "<script>";
		echo "alert('員工編號不可為空值，請重新輸入！');";
		echo "location.href='../insertEmp.html'";
		echo "</script>";
	}if(empty($_POST['emp_name'])){
		echo "<script>";
		echo "alert('員工姓名不可為空值，請重新輸入！');";
		echo "location.href='../insertEmp.html'";
		echo "</script>";
	}else{
		require("connect.php");
		
		$emp_no=$_POST['emp_no'];
		$emp_query_sql=mysql_query("select * from employee where EMP_NO='$emp_no'");
		$emp_data=mysql_fetch_row($emp_query_sql);
		
		if(empty($emp_data)){
			$emp_name=$_POST['emp_name'];
			$Email=$_POST['Email'];
			$emp_insert_sql=mysql_query("insert into employee (EMP_NO,NAME,Email) VALUES ('$emp_no','$emp_name','$SEmail')");
			echo "<script>";
			echo "alert('員工編號：$emp_no\\n員工姓名：$emp_name\\nEmail：$Email\\n員工新增成功！');";
			echo "location.href='../view.php'";
			echo "</script>";
		}else{
			echo "<script>";
			echo "alert('此員工編號已存在，請重新輸入！');";
			echo "location.href='../insertEmp.html'";
			echo "</script>";
		}
	}
?>