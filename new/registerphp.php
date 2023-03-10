<?php
session_start();
$uname1 =$_POST['uname1'];
$email1 =$_POST['email1'];
$pass1 =$_POST['pass1'];
$pass2 =$_POST['pass2'];
$token=md5(rand());



if(!empty($uname1) || !empty($email1) || !empty($pass1) || !empty($pass2))
{
    $host ="localhost";
    $dbusername ="root";
    $dbpassword ="";
    $dbname ="startup";

$conn =new mysqli ($host, $dbusername, $dbpassword, $dbname);

if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().') '. mysqli_connect_error());
}
else{
   
    $SELECT ="SELECT email1 From register Where email1 =? Limit 1";
    $INSERT ="INSERT Into register (uname1 , email1 , pass1 , pass2,tokennum)values(?,?,?,?,?)";

    $stmt =$conn->prepare($SELECT);
    $stmt->bind_param("s",$email1);
    $stmt->execute();
    $stmt->bind_result($email1);
    $stmt->store_result();
    $rnum =$stmt->num_rows;

    if($rnum==0){
  
    $SELECT ="SELECT uname1 From register Where uname1 =? Limit 1";
    $stmt =$conn->prepare($SELECT);
    $stmt->bind_param("s",$uname1);
    $stmt->execute();
    $stmt->bind_result($uname1);
    $stmt->store_result();
    $knum =$stmt->num_rows;
         if($knum==0){
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("sssss",$uname1,$email1,$pass1,$pass2,$token);
        $stmt->execute();

        
        echo "<script type='text/javascript'>
			alert('successfuly submited!');
			window.location.href='index.html';
	      </script>";
          die();

	
    
    }else{
        $_SESSION['name']="Username already exist ";
        header('Location:registerhtml.php');
         die();
	
}}else{
    $_SESSION['gmail']="Email already exist";
        header('Location:registerhtml.php');
        die();
 }}
    $stmt->close();
    $conn->close();
}
else{
    echo "<script type='text/javascript'>
		alert('all field are required');
	 	window.location.href='register.html';
          </script>";
    
    die();
}


?>