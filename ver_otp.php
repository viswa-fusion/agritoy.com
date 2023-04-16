<?php
    session_start();
    require "cripting\Encript\Encoding.php";

$token=base64_decode($_POST['getotp']);

$uname=$_POST['newnameUser'];

$pass1=$_POST['newnamePass'];

$pass2=$_POST['newnameConfirm'];

$email=$_POST['newname'];

$new_otp=$_POST['getotp'];

$toy='toyagri';
$miss_match='otpnotmatch';

$otptoken=Encrypt_viswa($_POST['boxin']);
 if($token === $otptoken && strlen($_POST['boxin'])<=6){
    
        $agri=base64_encode($toy);

        $unameec1=base64_encode($uname);
      
        $passec2=base64_encode($pass1);
     
        $passec3=base64_encode($pass2);
       
        $emailec=base64_encode($email);

        
    header("Location:registerhtml.php?nextmail=".$emailec."&toyagri=".$agri."&useMyName=".$unameec1."&pass001=".$passec2."&conpass002=".$passec3);
}else{
    $missMatch=base64_encode($miss_match);
    $unameec1=base64_encode($uname);
    $passec2=base64_encode($pass1);
    $passec3=base64_encode($pass2);
    $emailec=base64_encode($email);
    $otp_get=$new_otp;
    $_SESSION['otp_errOr']="otp not valid";
    header("Location:registerhtml.php?errOr=".$missMatch."&geterotp=".$otp_get."&nextmail=".$emailec."&useMyName=".$unameec1."&pass001=".$passec2."&conpass002=".$passec3);
    }
?>