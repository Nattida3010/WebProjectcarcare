<?php
include  'config.php';
session_start();
$Car_num = $_POST['Car_num'];
$FName = $_POST['FName'];
$LName = $_POST['LName'];
$Phone = $_POST['Phone'];
$Type = $_POST['Type'];
$Color = $_POST['Color'];
$sql = "INSERT INTO customer(ID,Car_num,FName,LName, Phone,Type,Color)
				VALUES ('0','$Car_num', '$FName', '$LName','$Phone', '$Type','$Color')";
$result = mysqli_query($connect,$sql);

if($result){
	echo "<script type='text/javascript'>";
	echo "alert('สมัครสมาชิกสำเร็จ');";
	echo "window.location = 'Home.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('เกิดข้อผิดพลาด โปรดทำการสมัครใหม่อีกครั้ง".mysqli_error($connect)."');";
	echo "window.location = 'walkinpage.php'; ";
	echo "</script>";
	}
mysqli_close($connect);


?>