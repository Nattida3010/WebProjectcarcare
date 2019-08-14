<!DOCTYPE html>
<html>
<head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Register Page</title>
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>

  

                <div class="d-flex justify-content-center form_container">
               
                        <center>
                            <h2>กรุณากรอกหมายเลขทะเบียนรถ</h2>
                        </center>            
                       
                        <?php
   echo '<form action="member.php" method="post" name="brw_form" >';
   echo '<input class="form-control mr-sm-3"  id="myInput" name="carnum" type="text" placeholder="หมายเลขทะเบียนรถ">';
   echo '<input class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit"  value = "ค้นหา">';
   echo '</form>';
?>
                <div class="mt-2">
                    <div class="d-flex justify-content-center links">
                        <button type="button" name="button" class="btn turnback_btn" OnClick="Back();"
                            class="ml-2">กลับ</button>
                    </div>
            
    </div>
</form>
    <script language="javascript">
            function Back(){     
                console.log("true");
			  window.location.href = ("Home.php");

            }
            </script>

</body>

</html>