<?php
include  'config.php';
session_start();
$FnameWeb= $_POST['FnameWeb'];
$LnameWeb = $_POST['LnameWeb'];
$UsernameWeb = $_POST['UsernameWeb'];
$PasswordWeb = $_POST['PasswordWeb'];
$sql = "INSERT INTO memberweb (IdWeb,FnameWeb, LnameWeb, UsernameWeb, PasswordWeb)
				VALUES ('0','$FnameWeb', '$LnameWeb', '$UsernameWeb', '$PasswordWeb')";
$result = mysqli_query($connect,$sql);

if($result){
	echo "<script type='text/javascript'>";
	echo "alert('สมัครสมาชิกสำเร็จ');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('เกิดข้อผิดพลาด โปรดทำการสมัครใหม่อีกครั้ง".mysqli_error($connect)."');";
	echo "window.location = 'siguppage.php'; ";
	echo "</script>";
	}
mysqli_close($connect);


?>