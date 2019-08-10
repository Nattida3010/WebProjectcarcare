<?php
include  'config.php';
session_start();

$sql = 'SELECT * FROM loginweb WHERE Username ="'.$_POST['username'].'" AND Password = "'.$_POST['password'].'"'; 
$result = mysqli_query($connect,$sql);
$numrows = mysqli_num_rows($result);
$objResult = mysqli_fetch_array($result,MYSQLI_ASSOC);
if($numrows==0){
 
 echo "  <script>
		alert('กรุณาตรวจสอบ ชื่อผู้ใช้หรือรหัสผ่าน');
		window.location  = 'index.php';
		</script>";

}else{
	$_SESSION["ID"] = $objResult["ID"];
			session_write_close();
			if($_SESSION["ID"]==9999){
				header("location:admin.php");
			}else{
                $_SESSION["ID"] = $objResult["ID"];
                session_write_close();
                header("location:page1.php");
            }
			

}mysqli_close($connect);
?>