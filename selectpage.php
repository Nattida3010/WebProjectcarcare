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
    <?php
   echo '<form action="search.php" method="post" name="brw_form" >';
   echo ' <input class="form-control mr-sm-3"  id="myInput" name="name" type="text" placeholder="กรุณากรอกหมายเลขทะเบียนรถ">';
   echo '<input class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit"  value = "ค้นหา">';
   echo '</form>';
?>
    <!-- <input class="form-control mr-sm-3"   id="myInput" type="text" placeholder="กรุณากรอกหมายเลขทะเบียนรถ"> -->
    <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="button" name="button" OnClick="seach();">ค้นหา</button> -->

    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
      aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <i class='fas fa-home' style='font-size:37px;color:#f39c12'></i>
          <a class="nav-link" href="Home.php">Home
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
  <center>
         <h2>walkin</h2>
        </center>      
                    <div class="d-flex justify-content-center">
                    <button  style='font-size:50px; background-color: #ffff42' OnClick="member();">สมาชิก</button>
                    <button  style='font-size:50px' OnClick="newmember();">ลูกค้าใหม่</button>
                       
</body>
<script language="javascript">
            function newmember(){     
                console.log("true");
			  window.location.href = ("walkinpage.php");

            }
            </script>
            <script language="javascript">
            function member(){     
                console.log("true");
			  window.location.href = ("memberpage.php");

            }
            </script>
</html>