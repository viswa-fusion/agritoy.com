<?php
require "google-api-php-client/vendor/autoload.php";

$clientId="361888226634-rqh3h0s72to0okllquq5si06jrndnokm.apps.googleusercontent.com";
$clientSecret="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";
$redirectURI="http://localhost/new/registerhtml.php";

$client =new Google_Client();
$client->setClientId($clientId);
$client->setClientSecret($clientSecret);
$client->setRedirectURI($redirectURI);
$client->addScope("email");
$client->addScope("profile");
if(isset($_GET["code"])){
  $token=$client->fetchAccessTokenWithAuthCode($_GET["code"]);
  $obj=new Google_Service_Oauth2($client);
  $data=$obj->userinfo->get();
  $name=$data->getname();
  $email=$data->getemail();
  $alpha="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@!#$%^&*";
  $pass=substr(str_shuffle($alpha),0,8);
  $Gname=base64_encode($name);
  $Gmail=base64_encode($email);
  $Gpass=base64_encode($pass);
  header("Location:Gregister.php?Gmail=".$email."&Gname=".$name."&Gpass=".$pass);
}
?>