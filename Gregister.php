<?php
session_start();
require "DatabaseConnection/DataBase.php";
require 'phpmailer/PHPMailerAutoload.php';
require "cripting\Encript\Encoding.php";
$Gname = $_GET['Gname'];

$Gmail = $_GET['Gmail'];

function rand_Pass(){
    $data1="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $data2="abcdefghijklmnopqrstuvwxyz";
    $data3="1234567890";
    $data4="!@#$%^&*()?><{}[]~";
    return str_shuffle(substr(str_shuffle($data1),0,3).substr(str_shuffle($data2),0,3).substr(str_shuffle($data3),0,2).substr(str_shuffle($data4),0,2));
}
$token=rand_Pass();
$token1=md5(rand());
$token2=Encrypt_viswa($token);
if(!empty($Gmail) || !empty($Gname) || !empty($Gpass)){
    if(mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_errno().') '. mysqli_connect_error());
    }else{
        
    $SELECT ="SELECT email1 From register Where email1 =? Limit 1";
    $INSERT ="INSERT Into register (uname1 , email1 , pass1 ,tokennum)values(?,?,?,?)";

    $stmt =$con->prepare($SELECT);
    $stmt->bind_param("s",$Gmail);
    $stmt->execute();
    $stmt->bind_result($Gmail);
    $stmt->store_result();
    $rnum =$stmt->num_rows;
    
    if($rnum==0){
        $stmt = $con->prepare($INSERT);
        $stmt->bind_param("ssss",$Gname,$Gmail,$token2,$token1);
        $stmt->execute();
        
            function sent_temp_pass($Gname,$Gmail,$token,$token1){
            $mail = new PHPMailer;
            $mail->SMTPDebug = 3;                               
            $mail->isSMTP();                                       
            $mail->Host = 'smtp.gmail.com';   
            $mail->SMTPAuth = true;                              
            $mail->Username = 'agritoys@gmail.com';                
            $mail->Password = 'pycsjgarbtkrotls';                         
            $mail->SMTPSecure = 'tls';                            
            $mail->Port = 587;                                    
            
            $mail->setFrom('agritoys@gmail.com', 'agritoy');
            $mail->addAddress($Gmail);               
           
            $mail->isHTML(true);                                
            
            $mail->Subject = "Welcome to Agritoy";
            $mail->Body    = "
            <div>
            <div style='background-color:#4DBFBF;'>
            <center><div>
                <div style='color:white; font-size:40px;'>
                <b>Welcome!</b>
                </div>
                <img height='189px' width='216px' src='https://assets.opensourceemails.com/imgs/neopolitan/robot-happy.png' editable='img' align='center' alt='img' />
                <div style='color:#187272; font-size:16px; padding-bottom:10px; align:center; line-height:20px;'>
                Hi $Gname, Your account has successfully register in Agritoy! Click below to set new password!
                </div>
                <a  href='http://localhost/new/new_passhtml.php?token=$token1' style=' text-decoration: none;
            background-color:green;
            color: white;
            padding: 5px;
            margin-bottom: 10px;
            display: inline-flex;
            border-radius: 5px;'>Set New password</a>
            </div></center>
            </div>
            <div style='background-color:#F5774E; padding:10px 0;'>
            <center><div style='color:#FFFFFF; padding:0; font-size:36px; editable:title; '>
                Temprory password
                </div>
                <div style='color:#933f24; padding-top:10px; font-size:18px; editable:subtitle; '>
                <b>$token</b>
                </div>
              </div></center>
            </div>
            ";
                if(!$mail->send()) {
                    echo "check internet";
                  } else{
                    echo "<script type='text/javascript'>
                    window.location = 'index.php?Gname=".$Gname."';
                    </script>";
                  }}
                  sent_temp_pass($Gname,$Gmail,$token,$token1);
                  die();

}else{
    if($rnum==1){
        echo "<script type='text/javascript'>
                    alert ('already a user enter to login');
                    window.location = 'index.php?Gname=".$Gname."';
                    </script>";
    }
    
    }
}
}else{
    $_SESSION['Greg']= "NULL data in your google account";
    header("Location:registerhtml.php");
}

?>