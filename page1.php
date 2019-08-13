<html>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Sriracha" rel="stylesheet">
<?php
session_start();
	if($_SESSION['memberid'] == "")
	{
		echo "
		<script>
		alert('กรุณาลงชื่อเข้าใช้');
		window.location = 'index.php';
		</script>";
		exit();
	}
?>
<br>
<center><h1>ระบบยืมคืนหนังสือ<h1></center>
<center><h2><a href="#">หน้าแรก</a>&nbsp&nbsp&nbsp
<a href="bookk.php?">หนังสือ</a>&nbsp&nbsp&nbsp
<a href="list.php">รายการยืมหนังสือ</a>&nbsp&nbsp&nbsp
<a href="logout.php">ออกจากระบบ</a>
<h2></center>

<?php
include  'config.php';
$sqlmember = 'SELECT * FROM member WHERE memberid = "'.$_SESSION['memberid'].'" ';
$query = mysqli_query($connect,$sqlmember);
$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
echo '<table align="center" border = "2" cellpading="2" cellspacing="1" width="500" hight="300">';
echo '<tr>';
echo '<td>'; 
echo '<center>'; 
echo '<br>'.'<br>'; 
echo "เลขประจำตัวสมาชิก : ".$result["memberid"].'<br>';
echo "ชื่อ : ".$result["MFname"].'<br>';
echo "นามสกุล : ".$result["MLname"].'<br>';
echo "เพศ : ".$result["MGender"].'<br>';
echo "จังหวัด : ".$result["Address"].'<br>';
echo "การศึกษา : ".$result["MLevel"].'<br>';
echo '<br>'.'<br>'; 
echo '</center>'; 
echo '</td>';
echo '</tr>';
echo '</table>';
echo '<center>';
echo '<br>'; 
echo '<a  href="edituser.php?memberid='.$_SESSION['memberid'].'&MFname='.$result["MFname"].'&MLname='.$result["MLname"].'&Address='.$result["Address"].'&MLevel='.$result["MLevel"].'" >แก้ไขข้อมูลส่วนตัว </a>';
echo '</center>';
?>
</html>