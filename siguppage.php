<!DOCTYPE html>
<html>
<head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Register Page</title>
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
</head>
<script>
    (function () {
        $('#mainform').submit(function (event) {
            var form = $('#mainform')[0];
            if (form.checkValidity() === false) {
                event.preventDefault();
            }
            $(this).addClass('was-validated');
        });
    });
</script>

<body>

    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="regist_card">

                <div class="d-flex justify-content-center">

                    <div class="brand_logo_container">
                        <img src="pic/logo.gif" class="brand_logo" alt="Logo">
                    </div>
                </div>

                <div class="d-flex justify-content-center form_container">
                <form action='sigup.php' method='post' id ="mainform" name='form' enctype="multipart/form-data">
                        <center>
                            <h2>สมัครสมาชิก</h2>
                        </center>


                        <div class="input-group mb-2">

                            <div class="input-group-append">
                                <span class="input-group-text"></span>
                            </div>
                            <input type="text" name="FnameWeb" class="form-control input_user" value="" placeholder="กรอกชื่อ"
                            required pattern="^[ก-๏]+$">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"></span>
                            </div>
                            <input type="text" name="LnameWeb" class="form-control input_pass" value=""
                                placeholder="กรอกนามสกุล"  required pattern="^[ก-๏]+$">
                        </div>

                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"></span>
                            </div>
                            <input type="text" name="UsernameWeb" class="form-control input_user" value!=username
                                placeholder="กรอกชื่อผู้ใช้"  required pattern="^[a-zA-Z,0-9]+$">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"></span>
                            </div>
                            <input type="password" name="PasswordWeb" class="form-control input_pass" value=""
                                placeholder="กรอกรหัสผ่าน" required>
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
    </div></form>
   
    <script language="javascript">
            function Back(){     
                console.log("true");
			  window.location.href = ("index.php");

            }
            </script>

</body>

</html>