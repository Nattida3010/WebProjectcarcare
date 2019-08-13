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
  
  <div class="head">
    <center>
      <h2>รายการให้บริการของรถในวันที่ </h2>
      
    </center>
    
      <div id="clockbox" style="text-align:center;color:white;font-weight:bold;font-size: 150%;"></div>
      <button class="add" style='font-size:20px' OnClick="walkin();"> Walkin <i class='fas fa-plus'></i></button><br><br>
      
      <!-- แสดงตารางรวม -->

 <!-- <div class="container" style="overflow-x:auto; text-align: center;"> 
      <table border="2" width="60%" height="20%" bgcolor="white;" class="table"> -->
        <!-- <thead>
          <tr bgcolor="gray">
            <th>วันเดือนปี</th>
            <th>เลขทะเบียนรถ</th>
            <th>ชื่อเจ้าของรถ</th>
            <th>เบอร์โทรศัพท์</th>
            <th>ประเภท/สี</th>
            <th>รายการที่ลูกค้าใช้บริการ</th>
            <th>ระดับความสกปรก</th>
            <th>ขนาดของรถ</th>
            <th>สถานะของรถ</th>
            <th>การชำระเงิน</th>
          </tr> 
         </thead>  -->
 <?php
include  'config.php';
$sqluser = 'SELECT * FROM customer';
$queryuser = mysqli_query($connect,$sqluser);
// $sqlwork = 'SELECT * FROM work';
// $querywork = mysqli_query($connect,$sqlwork);

echo'<div class="container" style="overflow-x:auto; text-align: center;"> ';
echo'<table border="2"  bgcolor="white;" class="table">';
echo '<tr  bgcolor = "gray"><td>';
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
while($user= mysqli_fetch_array( $queryuser, MYSQLI_ASSOC)){
    echo '<tr>';
    echo '</td><td>';
echo '<center>'.$user["ID"].'<br>';
echo '</td><td>';
echo $user["Car_num"].'<br>';
echo '</td><td>';
echo $user["Name"].'<br>';
echo '</td><td>';
echo $user["Phone"].'<br>';
echo '</td><td>';
echo $user["Type"].'<br>';
echo '</td><td>';
echo $user["Color"].'<br>';
echo '</td><td>';
echo '</td></tr>';
}
echo '</table>';
echo '</center>';


?>
<!-- 
         <tbody id="myTable">
          <tr>
            <th>13/03/62</th>
            <th>ทจ865 </th>
            <th>สมจิตร สมใจ</th>
            <th>0626960144</th>
            <th>เก๋ง/แดง</th>
            <th>ล้างรถ ขัดสี</th>
            <th>มาก</th>
            <th>เล็ก</th>
            <th><select id="select">
              <option >สถานะของรถ</option>
              <option >กำลังดำเนินงาน</option>
              <option >รอการชำระ</option>
              <option >ชำระแล้ว</option>
              </select></th>
  


          </tr>
          <tr>
            <th>13/03/62</th>
            <th> กจ123 </th>
            <th>สุข สบาย</th>
            <th>0626960144</th>
            <th>กะบะ/ดำ</th>
            <th>ขัดสี</th>
            <th>น้อย</th>
            <th>ใหญ่</th>
            <th><select id="select">
              <option >สถานะของรถ</option>
              <option >กำลังดำเนินงาน</option>
              <option >รอการชำระ</option>
              <option >ชำระแล้ว</option>
              </select></th>
  

          </tr>
          <tr>
            <th>13/03/62</th>
            <th>ปจ235 </th>
            <th>สมจิตร สมใจ</th>
            <th>0626960144</th>
            <th>เก๋ง/แดง</th>
            <th>ล้างรถ ขัดสี</th>
            <th>มาก</th>
            <th>เล็ก</th>
            <th><select id="select">
              <option >สถานะของรถ</option>
              <option >กำลังดำเนินงาน</option>
              <option >รอการชำระ</option>
              <option >ชำระแล้ว</option>
              </select></th>
  

          </tr>
          <tr>
            <th>13/03/62</th>
            <th> หก333 </th>
            <th>สุข สบาย</th>
            <th>0626960144</th>
            <th>กะบะ/ดำ</th>
            <th>ขัดสี</th>
            <th>น้อย</th>
            <th>ใหญ่</th>
            <th><select id="select">
              <option >สถานะของรถ</option>
              <option >กำลังดำเนินงาน</option>
              <option >รอการชำระ</option>
              <option >ชำระแล้ว</option>
              </select></th>
  
          </tr>        
        </tbody> -->

      <!-- </table> -->


<!-- 
    </div> -->
  <!-- </div> -->
    <script language="javascript">
    function seach() {
      console.log("true");
      window.location.href = ("resultseachpage.html");

    }
  </script>

  <script language="javascript">
    function change() {
      console.log("true");
      if (confirm("ท่านต้องการเปลี่ยนสถานะใช่หรือไม่")) {

      } else {

      }

    }
  </script>
  <script>
    $(document).ready(function () {
      $(".dropdown-toggle").dropdown();
    });
  </script>

<script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  </script>
  <script language="javascript">
    function walkin(){     
        console.log("true");
      window.location.href = ("walkinpage.html" );
  
    }
    </script>

<script>

tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
  tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
  
  function GetClock(){
  var d=new Date();
  var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
  if(nyear<1000) nyear+=1900;
  var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;
  
  if(nhour==0){ap=" AM";nhour=12;}
  else if(nhour<12){ap=" AM";}
  else if(nhour==12){ap=" PM";}
  else if(nhour>12){ap=" PM";nhour-=12;}
  
  if(nmin<=9) nmin="0"+nmin;
  if(nsec<=9) nsec="0"+nsec;
  
  document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
  }
  
  window.onload=function(){
  GetClock();
  setInterval(GetClock,1000);
  }
</script>

</body>

</html>