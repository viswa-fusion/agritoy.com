<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set New Pasword</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" type="text/css" href="newpasscss.css">
</head>
<body>
        <form id="cont" method="POST" action="new_pass1.php">
            <center><br><br>
            <?php 
        if(isset($_SESSION['errorind'])){
            ?>
            <center><div class="error_mes" role="alert">
            <?php  echo $_SESSION['errorind']; ?>
            </div></center>
            <?php
       
        unset($_SESSION['errorind']);
    }
        ?>
    <?php 
      if(isset($_SESSION['errorind2'])){
            ?>
            <center><div class="error_mes1" role="alert">
            <?php  echo $_SESSION['errorind2']; ?>
            </div></center>
            <?php
       
        unset($_SESSION['errorind2']);
    }
     ?>  
            <br><div class="triangle1">
<span class="warn warning"></span>
</div>
            <input id="pass1" type="text" placeholder="Password" name="mpass"><br>
            <div id="layer1" style='visibility:hidden; position:absolute;'>⚠</div>
            <div id='topIcon' ></div>
            <div id='topIcon1' class="iconTop"> 
                <p1>
                    Must contain one number<br>
                    Must contain uppercase<br>
                    Must contain lowercase<br>
                    Must contain special character
                </p1>
            </div>
            <input id="pass2" type="password" placeholder="Confirm Password" name="cpass">
            <i class="bi bi-eye-slash" id="togglePassword" style="position:absolute;color:white;font-size:20px;margin-top:30px;"></i><br>
            <div id="hid"><input type="text" value="<?php if(isset($_GET['token'])){echo $_GET['token'];} ?>" name="token1"></div>
            <div title="enter password" class="layer" id="layer"></div>
            <button class="no" type="submit" name="okdone">Submit</button>
</center>
        </form>
        <script type='text/javascript'>
            const togglePassword = document.querySelector("#togglePassword");
            const password = document.querySelector("#pass2");
            togglePassword.addEventListener("click", function (){
            const type = pass2.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            this.classList.toggle("bi-eye");
        });
            
            var pass1=document.getElementById('pass1');
            var pass2=document.getElementById('pass2');
            pass1.oninput=function(){
                if(7 <= pass1.value.length){
                   var number=/[0-9]/g;
                   var upperCase=/[A-Z]/g;
                   var lowerCase=/[a-z]/g;
                   var pass10=pass1.value;
if(pass10.match(upperCase) && pass10.match(lowerCase) && pass10.match(number) 
 && (pass10.includes('!') || pass10.includes('~') || pass10.includes('|') || pass10.includes('@')
 || pass10.includes('$') || pass10.includes('%') || pass10.includes('^') || pass10.includes('&') 
 || pass10.includes('*') || pass10.includes('(') || pass10.includes(')') || pass10.includes('-') 
 || pass10.includes('_') || pass10.includes('+') || pass10.includes('/') || pass10.includes(':') 
 || pass10.includes('.') || pass10.includes(',') || pass10.includes('>') || pass10.includes('<') 
 || pass10.includes('?') || pass10.includes('#'))){

                    if(pass1.value.length < 12){
                pass1.style.borderBottom="2px solid #e9ff91";
                pass1.style.color="#e9ff91";
                document.querySelector('#layer1').classList.remove('icon1');
                document.querySelector('#layer1').style.visibility='hidden';
                document.querySelector('#topIcon').classList.remove('topIcon2');
                return true;
                }else{
                pass1.style.borderBottom ='2px solid red';
                pass1.style.color='red';
                document.querySelector('#layer1').classList.add('icon1'); 
                document.querySelector('#topIcon').classList.add('topIcon2'); 
                document.querySelector('#layer1').style.visibility='visible';           
                document.querySelector('#layer').classList.add('layer');
                return false;
                }}else{
                pass1.style.borderBottom ='2px solid red';
                pass1.style.color='red';
                document.querySelector('#layer1').classList.add('icon1'); 
                document.querySelector('#topIcon').classList.add('topIcon2');
                document.querySelector('#layer1').style.visibility='visible';                       
                document.querySelector('#layer').classList.add('layer');
                return false;
                }
                }
                else{
                pass1.style.borderBottom ='2px solid white';
                pass1.style.color='white';
                document.querySelector('#layer').classList.add('layer');
                document.querySelector('#layer1').classList.remove('icon1');
                document.querySelector('#topIcon').classList.remove('topIcon2');
                document.querySelector('#layer1').style.visibility='hidden';
                return false;
                }}
            pass2.oninput=function(){
                var number=/[0-9]/g;
                var upperCase=/[A-Z]/g;
                var lowerCase=/[a-z]/g;
  if(pass1.value === pass2.value && pass2.value.match(upperCase) && pass2.value.match(lowerCase) && pass2.value.match(number) 
 && (pass2.value.includes('!') || pass2.value.includes('~') || pass2.value.includes('|') || pass2.value.includes('@')
 || pass2.value.includes('$') || pass2.value.includes('%') || pass2.value.includes('^') || pass2.value.includes('&') 
 || pass2.value.includes('*') || pass2.value.includes('(') || pass2.value.includes(')') || pass2.value.includes('-') 
 || pass2.value.includes('_') || pass2.value.includes('+') || pass2.value.includes('/') || pass2.value.includes(':') 
 || pass2.value.includes('.') || pass2.value.includes(',') || pass2.value.includes('>') || pass2.value.includes('<') 
 || pass2.value.includes('?') || pass2.value.includes('#'))){
                    pass2.style.borderBottom="2px solid #e9ff91";
                    pass2.style.color="#e9ff91";
                    document.querySelector('#layer').classList.remove('layer');
                    document.getElementById('pass1').disabled=true;
                    return true;
                }else{
                    pass2.style.borderBottom ='2px solid red';
                    pass2.style.color='red';
                    document.querySelector('#layer1').classList.add('icon1');     
                    document.querySelector('#topIcon').classList.add('topIcon2');                   
                    document.querySelector('#layer').classList.add('layer');
                    document.getElementById('pass1').disabled=false;
                    return false;
                }
            }
            
        </script> 
</body>
</html>


