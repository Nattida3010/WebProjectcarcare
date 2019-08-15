<!DOCTYPE html>
<html>

<head>
  <title>Home Page</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
    integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-danger navbar-danger ">
    <a class="navbar-brand" href="#">
      <img src="pic/logo.gif" class="home_logo" alt="Logo">


    </a>


    <input class="form-control mr-sm-3" type="text" placeholder="กรุณากรอกหมายเลขทะเบียนรถ">
    <button class="btn btn-outline-success my-2 my-sm-0" type="button" name="button" OnClick="seach();">ค้นหา</button>

    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
      aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <i class='fas fa-home' style='font-size:37px;color:#f39c12'></i>
          <a class="nav-link" href="Homepage.html">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item active">
          &nbsp; <i class='fas fa-file-alt' style='font-size:37px;color:#f39c12'></i>
          <a class="nav-link" href="reportpage.html">รายงาน
            <span class="sr-only">(current)</span>
          </a>
        </li>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item active">
          &nbsp;<i class="fas fa-bullhorn" style='font-size:37px; color:#f39c12'></i>
          <a class="nav-link" href="chatpage.html">ประกาศ
            <span class="sr-only">(current)</span>
          </a>
        </li>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <div class="dropdown">
          <div class="nav-item active">
            &nbsp;<div class="fas fa-cogs dropdown-toggle" data-toggle="dropdown" type="button"
              style='font-size:37px; color:#f39c12'></div><br>
            <div class="dropdown-menu " >
              <a class="dropdown-item" href="adduserpage.html">เพิ่มสมาชิก</a>
                 <a class=" dropdown-item   " href="loginpage.html" >ออกจากระบบ</a>
              
            </div>


          </div>
        </div>



      </ul>

    </div>
  </nav>
  <div class="head">
    <center>
      <h2>ผลการค้นหาหมายเลขทะเบียนรถ </h2>
    </center>
    <?php
include  'config.php';
$name = $_POST['name'];
echo '<center>';
$sqlsech = "SELECT * FROM customer WHERE Car_num LIKE '%$name%' ";
$resultsech = mysqli_query($connect,$sqlsech);
echo'<div class="container" style="overflow-x:auto; text-align: center;"> ';
echo'<table border="2"  bgcolor="white;" class="table">';
echo '<tr><td>';
echo "วันเดือนปี";
echo '</td><td>';
echo "เลขทะเบียนรถ";
echo '</td><td>';
echo "ชื่อเจ้าของรถ";
echo '</td><td>';
echo "เบอร์โทรศัพท์";
echo '</td><td>';
echo "ประเภท";
echo '</td><td>';
echo "สี";
echo '</td><td>';
echo '</td></tr>';
while($sech= mysqli_fetch_array( $resultsech)){
    echo '<tr>';
    echo '</td><td>';
echo '<center>'.$sech["ID"].'<br>';
echo '</td><td>';
echo $sech["Car_num"].'<br>';
echo '</td><td>';
echo $sech["FName"].'    '.$sech["LName"].'<br>';
echo '</td><td>';
echo $sech["Phone"].'<br>';
echo '</td><td>';
echo $sech["Type"].'<br>';
echo '</td><td>';
echo $sech["Color"].'<br>';
echo '</td><td>';
echo '</td></tr>';
}
echo '</table>';
echo '</center>';


?> 
<script language="javascript">
    function seach(){     
        console.log("true");
      window.location.href = ("resultseachpage.html" );
  
    }
    </script>
     <script>
      $(document).ready(function () {
        $(".dropdown-toggle").dropdown();
      });
    </script>
   
</body>

</html>