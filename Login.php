<?php
require "DatabaseConnection\googleOauth.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
        *{
    margin:0;
    padding:0;
}
#bg{
    background-image: url('image/wall3.png');
    background-size: cover;
    height: 100vh;
    width: 100%;
}
.container{
    float: right;
    height:425px;
    width:300px;
    margin:40px auto;
    border-radius: 20px;
    box-shadow: -2px 2px 4px black;
    margin-right: 20px;
    background-color: rgba(0, 0, 0, 0.295);
    position: relative;
    animation: transitionIn 1.3s;
}
@keyframes transitionIn{
    from{
        opacity: 0;
        transform: rotateX(-10deg);
    }
    to{
        opacity: 1;
        transform: rotateX(0);
    }
}
.log1{
    width: 30%;
    margin-top: -40px;
    position: relative;
    /*background-color: white;
    border-radius: 50%; */
}
/*.log{
    text-align:center;
    font-size:70px;
    color:white;
    text-shadow: 2px 2px 4px black;
}*/
#id01{
    margin-left:50px;
    display:flex;
    flex-direction: column;
    font-size: 30px;
    margin-top: 30px;
    color:white;
    text-shadow: -1px 1px 5px black ;
}
#id01 input{
    margin:0px 30px 0px 0px;
    font-size:20px ;
    border:none;
    border-bottom: 2px solid white;
    background:none;
    outline:none;
    color:white;
    
    transition: .2s ease-in-out 0s;
}
input:hover{
    cursor: text;
    transform: scale(1.05);
    
}
::placeholder{
    padding-left: 4px;
    color: rgb(117, 114, 114);
    text-shadow: -1px 1px 1px black ;
}
#id02{
    margin-left:50px;
    display:flex;
    flex-direction: column;
    font-size: 30px;
    margin-top: 40px;
    color:white;
    text-shadow: -1px 1px 5px black ;
}
#id02 input{
    margin:0px 30px 0px 0px;
    font-size:20px ;
    border:none;
    border-bottom: 2px solid white;
    background:none;
    outline:none;
    color:white;
    text-shadow: -1px 1px 5px black ;
    transition: .2s ease-in-out 0s;
}
button{
    width:50%;
    font-size: 20px;
    padding:7px;
    background:black ;
    border-radius: 10px;
    text-decoration:none;
    color:white;
    margin-left:25%;
    margin-top: 30px;
    display:block;
    transition: .2s ease-in-out 0s;
}
button:hover{
    cursor: pointer;
    transform: scale(1.04);
}
.next{
    margin-top: 9px;
}
#next{
   text-decoration: none;
   height: fit-content;
   width: fit-content;
   padding: 3px;
   background-color: rgba(0, 0, 0, 0.432);
   color:white;
   border: 2px solid rgba(255, 255, 255, 0.247);
   border-radius: 7px;
   margin-left: 6px;
   font-weight: 400;
   transition: .2s ease-in-out 0s;
   position: absolute;
}
#next:hover{
    cursor: pointer;
    transform: scale(1.03);
}
#next1{
    text-decoration: none;
    font-weight: 600;
    color: rgba(255, 255, 255, 0.829);
    float: right;
    margin-right:6px;
 }
.webname{
    position:fixed;
    font-size: 100px;
    background:linear-gradient(to right,lightgreen,skyblue);
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
    text-shadow: -1px 1px 5px white ;
    margin: 30px 0px 0px 20px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;    
}
.circle-icon {
  width: 35px;
  height: auto;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  animation: pulse 2s infinite;
  position:absolute;
  margin: -39px 0px 0px 250px;
}
    </style>
</head>

<body id="bg">
    
    <div><h1 class="webname">Agri Toy</h1>
    <div class="container">
        <h1 class="log"><center><img  class="log1" src="image/user.png"></center></h1>
        <form class="formMain" id="form1" method="POST" action="loginphp.php" name="form" onsubmit="return mainCheck()" required>
        <div id="id01">
            <lable>E-Mail</lable>
            <input type="text" placeholder="enter registerd email" name="email" id="inname" onkeyup="moveCursor(this,'inpass')">
        </div>    
        <div id="id02">
            <lable>Password</lable>
            <input type="password" placeholder="enter password" name="pass" id="inpass">
        </div>
            <button type="submit">login</button><a href="<?=$client->createAuthUrl()?>"><img id="G" class="circle-icon" height=60px; width=60px; src="image/google.png"></a>
            <br><p class="next"><a href="registerhtml.php" id="next">Sign up</a><a href="reset_passhtml.php" id="next1">Forget Password?</a></p>
        </form>
    </div>
</div>
    <script src="indexscript.js">
    </script>
    
</body>
</html>