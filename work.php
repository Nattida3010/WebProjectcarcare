<?php
session_start();
$wash_engin = 0;
$spray_under =0;
$clean_dust = 0;
$wash_asphalt = 0;
$chang_fuel = 0;

if(isset($_POST['wash_engin']))
$wash_engin = 1;
if(isset($_POST['spray_under']))
$spray_under =1;
if(isset($_POST['clean_dust']))
$clean_dust =1;
if(isset($_POST['wash_asphalt']))
$wash_asphalt = 1;
if(isset($_POST['chang_fuel']))
$chang_fuel = 1;
$level = $_POST['level'];
$size = $_POST['size'];
$car_num = $_SESSION['car_selected'];     
echo date("Y-m-d H:i:s");

include  'config.php';
$sql = 'INSERT INTO work
values("'.$car_num.'",'.$wash_engin.','.$spray_under.','.$clean_dust.','.$wash_asphalt.','.$chang_fuel.','.$level.','.$size.',0,0,'.date("Y-d-m H:i:s").')';
$result = mysqli_query($connect,$sql);
//$numrows = mysqli_num_rows($result);
// $objResult = mysqli_fetch_array($result,MYSQLI_ASSOC);
if(! $result){
    echo mysqli_error($connect);
}else{
    echo "success";
  
}
           
   mysqli_close($connect);   
   ?>