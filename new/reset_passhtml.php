<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>repass</title>
    <link rel="stylesheet" type="text/css" href="resetcss.css">
</head>
<body>
    <div class="cont">
        <div class="top"><center><h1>Reset Password</h1></center></div>
        <form action="reset_passphp.php" method="POST">
        <?php 
        if(isset($_SESSION['status'])){
            ?>
            <center><div class="error_mes" role="alert">
            <?php  echo $_SESSION['status']; ?>
            </div></center>
            <?php
       
        unset($_SESSION['status']);
    }
        ?>
        <?php 
        if(isset($_SESSION['status2'])){
            ?>
            <center><div class="error_mes2" role="alert">
            <?php  echo $_SESSION['status2']; ?>
            </div></center>
            <?php
       
        unset($_SESSION['status2']);
    }
        ?>
            <center><div class="box">
                <lable id="idm">Email Id</lable><br>
                <input type="text" id="email" placeholder="enter registerd email id"  name="mail">
            </div></center><div id="otp_layerL" class="otp_layerL"></div><div id="otp_layerR" class="otp_layerR"></div>
            <button class="butt" name="sentotp" type="submit">Send OTP</button>
        </form>   
    </div>
    <script type=text/javascript>
        var email=document.getElementById('email');
        email.oninput=function() {
            if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)){
                email.style.borderBottom="2px solid #e9ff91";
                email.style.color="#e9ff91";
                document.querySelector('#otp_layerL').classList.remove('otp_layerL');
                document.querySelector('#otp_layerR').classList.remove('otp_layerR');
                return true;
            }
            else{
                email.style.borderBottom="2px solid white";
                email.style.color="white";
                document.querySelector('#otp_layerL').classList.add('otp_layerL');
                document.querySelector('#otp_layerR').classList.add('otp_layerR');
                return false;
            }
        }
    </script>
</body>
</html>
