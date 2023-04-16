<?php
require "DatabaseConnection/DataBase.php";
require "cripting\Encript\Encoding.php";
if(!empty($_POST['email'])&&!empty($_POST['pass'])){
    $cemail=mysqli_real_escape_string($con,$_POST['email']);
    $cpass1=mysqli_real_escape_string($con,$_POST['pass']);
    $cpass=Encrypt_viswa($cpass1);
   $sqli=("select * from register where email1='".$cemail."' AND pass1='".$cpass."'limit 1");
  
    $result=mysqli_query($con,$sqli);
    $rnum=mysqli_num_rows($result);

    if($rnum!=0){
        while($row=mysqli_fetch_assoc($result)){
            $db_username =base64_encode(base64_encode($row['uname1']));
        }
        header("Location:index.php?name=".$db_username);
        }
    else{
        echo "<script type='text/javascript'>
                         alert('check your email/password enter correctly'); 
			 window.location.href='Login.php';
              </script>";
    } 
}
?>