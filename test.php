<html>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Sriracha" rel="stylesheet">
<script>
    $(function () {
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
    <table align='center' border='2' width='500' hight='100'>
        <tr>
            <td>
                <form action='signup2.php' method='post' name='form'>
                    <h1>
                        <center>สมัครสมาชิก</center>
                    </h1>
                    <center>ชื่อ :&emsp;&emsp;&emsp;&nbsp;<input name='MFname' type='text' placeholder="ภาษาไทยหรือEnglish" required
                            pattern="^[ก-๏\s,a-zA-Z]+$"><br><br></center>
                    <center>นามสกุล :&emsp;<input name='MLname' type='text' placeholder="ภาษาไทยหรือEnglish" required
                            pattern="^[ก-๏\s,a-zA-Z]+$"><br><br></center>
                    <center>จังหวัด :&emsp;&emsp;<input name='Address' type='text' placeholder="ภาษาไทยหรือEnglish" required
                            pattern="^[ก-๏\s,a-zA-Z]+$"><br><br></center>
                    <center>ชื่อผู้ใช้ :&emsp;&emsp;<input name='username' type='text' placeholder="English เท่านั้น" required
                            pattern="^[a-zA-Z]+$"><br><br></center>
                    <center>รหัสผ่าน :&emsp;&nbsp;&nbsp;<input name='password' type='password' placeholder="ตัวเลขหรือตัวหนังสือ" required><br><br></center>
                    <center>การศึกษา : &emsp;&emsp;<select name='MLevel' required>
                            <option value=''></option>
                            <option value='ประถมศึกษา'>ประถมศึกษา</option>
                            <option value='มัธยมศึกษา'>มัธยมศึกษา</option>
                            <option value='ปวช.'>ปวช.</option>
                            <option value='ปวส.'>ปวส.</option>
                            <option value='ปริญญาตรี'>ปริญญาตรี</option>
                            <option value='อื่นๆ'>อื่นๆ</option>
                        </select><br><br></center>
                    <center>วันเกิด : <input type='date' required><br><br></center>
                    <center><input type='radio' name='MGender' value='male'>ชาย
                        <input type='radio' name='MGender' value='female'>หญิง<br><br></center>
                    <center><input type='submit' class='btn btn-primary' name='Submit' value='สมัครสมาชิก'></center>
                </form>
    </table>
</body>
</html>