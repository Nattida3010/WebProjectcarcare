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
      

 <?php
include  'config.php';
// // $sqluser = 'SELECT * FROM customer';
// $queryuser = mysqli_query($connect,$sqluser);
// $sqlwork = 'SELECT * FROM work';
// $querywork = mysqli_query($connect,$sqlwork);
$sqlwork = 'SELECT customer.Car_num,customer.FName,customer.LName,customer.Phone,customer.Type,customer.Color,work.wash_engin,work.spray_under,work.clean_dust,work.wash_asphalt,work.chang_fuel,work.level,work.size,work.status,work.payment,work.time
from customer 
inner join work on customer.Car_num=work.Car_num';
$querywork = mysqli_query($connect,$sqlwork);

echo'<div class="container" style="overflow-x:auto; text-align: center;"> ';
echo'<table border="2"  bgcolor="white;" class="table">';
echo '<tr  bgcolor = "gray"><td>';
echo "เวลา";
echo '</td><td>';
echo "เลขทะเบียนรถ";
echo '</td><td>';
echo "ชื่อเจ้าของรถ";
echo '</td><td>';
echo "เบอร์โทรศัพท์";
echo '</td><td>';
echo "ประเภท/สี";
echo '</td><td>';
echo "รายการที่ลูกค้าใช้บริการ";
echo '</td><td>';
echo "ระดับความสกปรก";
echo '</td><td>';
echo "ขนาดของรถ";
echo '</td><td>';
echo "สถานะของรถ";
echo '</td><td>';
echo "ชำระเงิน";
echo '</td></tr>';
while($user= mysqli_fetch_array( $querywork, MYSQLI_ASSOC)){
  $works = '';
  if($user['wash_engin']=='1')
  $works .= 'ล้างห้องเครื่อง ';
  if($user['spray_under']=='1')
  $works .= 'ล้างอัดฉีดช่วงล้าง ';
  if($user['clean_dust']=='1')
  $works .= 'ล้างสีดูดฝุ่น ';
  if($user['wash_asphalt']=='1')
  $works .= 'ล้างยางมะตอย ';
  if($user['chang_fuel']=='1')
  $works .= 'ถ่ายน้ำเครื่อง ';
  if($user['level']=='1')
  $level = 'น้อย';
  else if($user['level']=='2')
  $level = 'มาก';
  if($user['size']=='1')
  $size = 'เล็ก';
  else if($user['size']=='2')
  $size = 'ใหญ่';
  echo "<tr>";
  echo '<td>'.$user["time"].'</td>';
  echo '<td>'.$user["Car_num"].'</td>';
  echo '<td>'.$user['FName'].' '.$user['LName'].'</td>';
  echo '<td>'.$user['Phone'].'</td>';
  echo '<td>'.$user['Type'].'/'.$user['Color'].'</td>';
  echo '<td>'.$works.'</td>';
  echo '<td>'.$level.'</td>';
  echo '<td>'.$size.'</td>';
  echo '<td><select id="select">
                  <option >กำลังดำเนินงาน</option>
              <option >เรียบร้อยแล้ว</option>
             </select> </td>'; 
  echo '<td><select id="select">
              <option >รอการชำระเงิน</option>
              <option >เรียบร้อยแล้ว</option>
             </select> </td>'; 
             
  echo "</tr>";
}
// while($user= mysqli_fetch_array( $querywork, MYSQLI_ASSOC)){
//     echo '<tr>';
//     echo '</td><td>';
// echo '<center>'.$user["time"].'<br>';
// echo '</td><td>';
// echo $user["customer.Car_num"].'<br>';
// echo '</td><td>';
// echo $user["FName"].'    '.$user["LName"].'<br>';
// echo '</td><td>';
// echo $user["Phone"].'<br>';
// echo '</td><td>';
// echo $user["Type"].'<br>';
// echo '</td><td>';
// echo $user["Color"].'<br>';
// echo '</td><td>';
// echo '</td></tr>';
// }
echo '</table>';
echo '</center>';


?>

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
      window.location.href = ("selectpage.php" );
  
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