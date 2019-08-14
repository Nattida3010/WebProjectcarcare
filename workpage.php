<!DOCTYPE html>
<html>
<head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Register Page</title>
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>

<?php
session_start();
?>
<div class="container h-100">
        <div class="d-flex justify-content-center h-100">
                       <center>
                            <h2>หมายเลขทะเบียนรถ <?php echo   $_SESSION['car_selected'] ?> </h2>
                        </center>


                <div class="d-flex justify-content-center form_container">
 <form action='work.php' method='post' id ="mainform" name='form' enctype="multipart/form-data">
  <input type="checkbox" name="wash_engin"> ล้างห้องเครื่อง<br>
  <input type="checkbox" name="spray_under" > ล้างอัดฉีดช่วงล้าง<br>
  <input type="checkbox" name="clean_dust"  > ล้างสีดูดฝุ่น <br>
  <input type="checkbox" name="wash_asphalt"> ล้างยางมะตอย<br>
  <input type="checkbox" name="chang_fuel" > ถ่ายน้ำเครื่อง<br>
  ระดับความสกปรก<input type='radio' name='level' value='1'>น้อย
                        <input type='radio' name='level' value='2'>มาก<br><br>
  ขนาดของรถ<input type='radio' name='size' value='1'>เล็ก
                        <input type='radio' name='size' value='2'>ใหญ่<br><br>               
  <br>
  <input type="submit" value="Submit">
</form>
    <script language="javascript">
            function Back(){     
                console.log("true");
			  window.location.href = ("Home.php");

            }
            </script>

</body>

</html>