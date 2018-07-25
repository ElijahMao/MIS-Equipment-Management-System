<?php
	if(empty($_POST['ass_no'])){
		echo "<script>";
		echo "alert('設備編號不可為空值，請重新輸入！');";
		echo "location.href='../insert.html'";
		echo "</script>";
	}else{
		require("connect.php");
		
		$ass_no=$_POST['ass_no'];
		$ass_query_sql=mysql_query("select * from assets where ASS_NO='$ass_no'");
		$ass_data=mysql_fetch_row($ass_query_sql);
		
		if(empty($ass_data)){
			$ass_name=$_POST['ass_name'];
			$SPECIFICATION=$_POST['SPECIFICATION'];
			$ass_insert_sql=mysql_query("insert into assets (ASS_NO,NAME,SPECIFICATION,IN_STUCK) VALUES ('$ass_no','$ass_name','$SPECIFICATION','YES')");
			echo "<script>";
			echo "alert('新增成功！');";
			echo "location.href='../view.php'";
			echo "</script>";
			echo $ass_insert_sql;
		}else{
			echo "<script>";
			echo "alert('此設備編號已存在，請重新輸入！');";
			echo "location.href='../insert.html'";
			echo "</script>";
		}
	}
?>