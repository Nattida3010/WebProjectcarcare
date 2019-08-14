<?php
include  'config.php';
session_start();

$sql = 'SELECT * FROM customer WHERE Car_num ="'.$_POST['carnum'].'"';
$result = mysqli_query($connect,$sql);

// $objResult = mysqli_fetch_array($result,MYSQLI_ASSOC);
if($result){
    
    $numrows = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    $carnumber=$row['Car_num'];
    if($numrows<=0){
        echo "<script>
        alert('กรุณาตรวจสอบ ชื่อผู้ใช้หรือรหัสผ่าน');
        window.location='walkinpage.php';
        </script>";
    }else{
        $_SESSION['car_selected']=$_POST['carnum'];
        echo "<script>
        alert('พบผู้ใช้".$carnumber."');
        window.location='workpage.php';
        </script>";
    }
    
  
}
           
   mysqli_close($connect);
   ?>