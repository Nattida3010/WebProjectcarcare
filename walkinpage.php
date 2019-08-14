<!DOCTYPE html>
<html>
<head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Register Page</title>
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>

    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="walkin_card">

                <div class="d-flex justify-content-center">

                    <div class="brand_logo_container">
                        <img src="pic/logo.gif" class="brand_logo" alt="Logo">
                    </div>
                </div>

                <div class="d-flex justify-content-center form_container">
                <form action='walkin.php' method='post' id ="mainform" name='form' enctype="multipart/form-data">
                        <center>
                            <h2>เพิ่มสมาชิกใหม่</h2>
                        </center>            
                       
                        <div class="input-group mb-2">

                            <div class="input-group-append">
                                <span class="input-group-text"></span>
                            </div>
                            <input type="text" name="Car_num" class="form-control input_user" value="" placeholder="หมายเลขทะเบียนรถ"
                            required pattern="^[ก-๏,0-9]+$">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"></span>
                            </div>
                            <input type="text" name="FName" class="form-control input_pass" value=""
                                placeholder="ชื่อ"  required pattern="^[ก-๏]+$">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"></span>
                            </div>
                            <input type="text" name="LName" class="form-control input_pass" value=""
                                placeholder="นามสกุล"  required pattern="^[ก-๏]+$">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"></span>
                            </div>
                            <input type="text" name="Phone" class="form-control input_user" 
                                placeholder="เบอร์โทรศัพท์"  required pattern="^[0-9]+$">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"></span>
                            </div>
                            <input type="text" name="Type" class="form-control input_pass" value=""
                            placeholder="ประเถทรถ"  required pattern="^[ก-๏]+$">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"></span>
                            </div>
                            <input type="text" name="Color" class="form-control input_pass" value=""
                            placeholder="สีรถ"  required pattern="^[ก-๏]+$">
                        </div>
                </div>
                <div class="d-flex justify-content-center mt-3 login_container">
                <input type='submit' class='btn btn-primary' name='submit' value='สมัครสมาชิก'>
                </div>
                
                <div class="mt-2">
                    <div class="d-flex justify-content-center links">
                        <button type="button" name="button" class="btn turnback_btn" OnClick="Back();"
                            class="ml-2">กลับ</button>
                    </div>
                </div>
            </div>
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