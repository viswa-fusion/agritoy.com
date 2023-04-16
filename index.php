<?php
if(isset($_GET['Gname'])){
    $db_username =$_GET['Gname'];
}
if(isset($_GET['name'])){
    $db_username=base64_decode(base64_decode($_GET['name']));
}
?>
 <?php {?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
* {
    margin: 0;
    padding: 0;
}
.body{
    background-image: url("image/homebgfinal.jpg");
   padding-top: 100px;
    height: 1000px;
    width: auto;
}



.firstsection {
    background-color: rgb(255, 255, 255);
    height: 400px;
}

.secondsection {
    background-color: rgb(255, 255, 255);
    height: 400px;
}

.box-main {
    display: flex;
    justify-content: center;
    align-items: center;
    color: black;
    max-width: 80%;
    margin: auto;
    height: 80%;
}

.firsthalf {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.secondhalf {
    width: 30%;
}

.secondhalf img {
    width: 70%;
    background-image: url('new/image/hbg.jpg');
    border-radius: 150px;
    display: block;
    margin: auto;
}

.text-big {
    font-family: 'Piazzolla', serif;
    font-weight: bold;
    font-size: 35px;
}

.text-small {
    font-size: 18px;
}

  
  
.section {
    height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    max-width: 90%;
    margin: auto;
}

.section-Left {
    flex-direction:row-reverse;
}

.paras {
    padding: 0px 65px;
}

.thumbnail img {
    width: 250px;
    border: 2px solid black;
    border-radius: 26px;
    margin-top: 19px;
}

.center {
    text-align: center;
}

::-webkit-scrollbar{
    width:10px;
    background:black;
}
::-webkit-scrollbar-thumb{
    background:white;
    border-radius:10px;
    opacity: 5px;
}
    
/* ----------nav bar------------------------------------------------------------------------------------------ */
.navbarmain{
    margin: 0;
    padding: 0;
}
.navbar {
display: flex;
width:-webkit-fill-available;
align-items: center;
justify-content: center;
position: fixed;
top: 0;
cursor: pointer;
border-radius: 15px;
}

.background {
-webkit-backdrop-filter:blur(10px);
backdrop-filter:blur(10px);
background-color: rgb(20 20 20 / 60%);
background-blend-mode: darken;
background-size: cover;
z-index: 9;
}

.nav-list {
width: 93%;
display: flex;
align-items: center;
}
.logo {
display: flex;
justify-content: center;
align-items: center;
}
.logo img {
width: 180px;
border-radius: 50px;
}
.nav-list li {
list-style: none;
padding: 26px 15px;
}

.nav-list li a {
font-family: 'Poppins';
text-decoration: none;
color: white;
}
.nav-list li a::after{
        content:'';
        height: 3px;
        width: 0%;
        background-color: white;
        display: block;
        transition: .3s ease-in-out;
       }
.nav-list li a:hover::after{
        content:'';
        height: 3px;
        width: 100%;
        background-color: white;
        display: block;
       }
.nav-list li a:hover {
color: grey;
}
.rightnav {
width: 30%;
text-align: right;
}
#search {
padding: 10px;
border-radius: 5px;
border: 1px solid #ccc;
width: 70%;
margin: 10px ;
float: right;
}
#clock{
color: white;
 text-decoration: none;
 font-weight: bolder;
 font-size: 25px;
}
#name{
float: left;
background-color: rgb(0, 0, 0);
}
.hi{
height:fit-content;
width: 441px;
float: left;
top:-15px;
position: relative;
padding: 5px;
font-size: 19px;
font-family:cursive;
color:rgb(233, 217, 75);
}
/* -Crop field start------------------------------------------------------- */
.CropData-float{
display:none;
}
.CropData-float ul li{
padding: 5px;
}

.navbar ul li:hover .CropData-float{
display:block;
height: fit-content;
width: 300px;
padding: 20px;
background-color: black;
border: solid 2px white;
color: aliceblue;
position: absolute;
border-radius: 10px;
}
.paddy-list {
display: none;
}
.paddy-list ul li{
padding: 5px;
}
.CropData-float ul li:hover .paddy-list{
display: block;
height: fit-content;
width: 300px;
margin-left: -106%;
margin-top: -9%;
padding: 20px;
background-color: black;
border: solid 2px white;
color: aliceblue;
position: absolute;
border-radius: 10px;
}
.paddy-list:after {
content: " ";
position: absolute;
margin-left: 320px;
top: 6px;
border-top: 15px solid transparent;
border-left: 15px solid rgba(233, 217, 217, 0.856);
border-bottom: 15px solid transparent;
}
.wheat-list{
display: none;
}
.wheat-list ul li{
padding:5px;
}
/* .CropData-float ul li:hover .wheat-list{
display:block;
height: fit-content;
width: 300px;
margin-left: -106%;
margin-top: -9%;
padding: 20px;
background-color: black;
border: solid 2px white;
color: aliceblue;
position: absolute;
border-radius: 10px;
} */
.wheat-list:after {
content: " ";
position: absolute;
margin-left: 320px;
top: 6px;
border-top: 15px solid transparent;
border-left: 15px solid rgba(233, 217, 217, 0.856);
border-bottom: 15px solid transparent;
}
.millets-list{
display: none;
}
.millets-list ul li{
padding:5px;
}
.CropData-float ul li:hover .millets-list{
display:block;
height: fit-content;
width: 300px;
margin-left: -106%;
margin-top: -9%;
padding: 20px;
background-color: black;
border: solid 2px white;
color: aliceblue;
position: absolute;
border-radius: 10px;
}
.millets-list:after {
content: " ";
position: absolute;
margin-left: 320px;
top: 6px;
border-top: 15px solid transparent;
border-left: 15px solid rgba(233, 217, 217, 0.856);
border-bottom: 15px solid transparent;
}
.pulses-list{
display:none;
}
.pulses-list ul li{
padding:5px;
}
.CropData-float ul li:hover .pulses-list{
display:block;
height: fit-content;
width: 314px;
margin-left:-110%;
margin-top: -9%;
padding: 20px;
background-color: black;
border: solid 2px white;
color: aliceblue;
position: absolute;
border-radius: 10px;
}
.pulses-list:after {
content: " ";
position: absolute;
margin-left: 334px;
top: 6px;
border-top: 15px solid transparent;
border-left: 15px solid rgba(233, 217, 217, 0.856);
border-bottom: 15px solid transparent;
}
/* -machine field start------------------------------------------------------- */
.ModernMachine-float{
display: none;
}
.ModernMachine-float ul li{
padding: 5px;
}
.navbar ul li:hover .ModernMachine-float{
display:block;
height: fit-content;
width: 300px;
padding: 20px;
background-color: black;
border: solid 2px white;
color: aliceblue;
position: absolute;
border-radius: 10px;
}
#loginlogo{
    height: 48px;
    margin-left:40px;
}
#loginlogo:hover > img{
    filter: drop-shadow(1px 1px 2px white);
}
#loginlogo a{
  margin-top: 15px;
  color: navajowhite;
  text-decoration: none;
  font-family: 'cursive';
}

#logout{
    height:30px;
    width:30px;
    margin-left:40px;
    background-image:url("image/logout.png");
    background-size:contain;
}
#logout:hover{
    filter: drop-shadow(1px 1px 3px white);
}

.subBody{
    height:max-content;
    width:max-content;
}
    </style>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
    </script>
    <script type=text/javascript>
      $(function(){
        $("#footer").load("footer.html");
      });
    </script>
</head>
<body>
<nav class="navbar background">
    <ul class="nav-list">
        <div class="logo">
            <img src= "image/download.png">
        </div>
        <div class="hi"><b>Hi</b><div id="namer" style="padding:0;position:absolute;"></div></div>
        <li class="dropbtn"><a onclick="Home()" href="#">Home</a></li>
        <li><a href="#CropsData">Crops Data</a>
            <div class="CropData-float">
                <ul>
                    <li><a href="#">Paddy</a>
                        <div class="paddy-list">
                            <ul>
                                <li><a onclick="BasmathiRice()" href="#bashmathi">Basmati rice</a></li>
                                <li><a onclick="PonniRice()" href="#ponni">Ponni Rice</a></li>
                                <li><a onclick="SonaMasuri()" href="#">Sona Masuri</a></li>
                                <li><a onclick="IdlyRice()" href="#">Idly Rice – short grain</a></li>
                                <li><a onclick="ChampaRice()" href="#">Champa Rice</a></li>
                                <li><a onclick="BarmaBlackRice()" href="#">Barma Black Rice</a></li>
                                <li><a onclick="HMTRice()" href="#">HMT Rice</a></li>
                                <li><a onclick="AizonRice()" href="#">Aizon Rice</a></li>
                            </ul>
                         </div>	
                    </li>
                    <li><a href="wheat/index.html">Wheat</a>
                        <div class="wheat-list">
                            <ul>
                                <li><a href="#">Common wheat</a><li>
                                <li><a href="#">Durum</a><li>	
                                <li><a href="#">Spelt</a><li>
                                <li><a href="#">Emmer</a><li>
                                <li><a href="#">Khorasan wheat</a><li>
                                <li><a href="#">Einkorn wheat</a><li>
                                <li><a href="#">Triticum compactum</a><li>
                                <li><a href="#">Triticum turgidum</a><li>
                                <li><a href="#">Triticum polonicum</a><li>
                                <li><a href="#">Triticum timopheevii</a><li>
                             </ul>
                        </div>	
                    </li>
                    <li><a href="#">Millets</a>
                        <div class="millets-list">
                            <ul>
                                <li><a href="millets/sorghum/index.html">Sorghum (Jowar)</a><li>
                                <li><a href="millets/pearl/index.html">Pearl Millet (Bajra)</a><li>	
                                <li><a href="millets/finger/index.html">Finger Millet (Ragi/Mandua)</a><li>
                                <li><a href="millets/foxtail/index.html">Foxtail Millet (Kangani/Kakun)</a><li>
                                <li><a href="millets/proso/index.html">Proso Millet (Cheena)</a><li>
                                <li><a href="millets/kodo/index.html">Kodo Millet (Kodo)</a><li>
                                <li><a href="millets/barnyard/index.html">Barnyard Millet (Sawa/Sanwa/ Jhangora)</a><li>
                                <li><a href="millets/kutki/index.html">Little Millet (Kutki)</a><li>
                             </ul>
                        </div>	
                    </li>
                    <li><a href="#">Pulses</a>
                        <div class="pulses-list">
                            <ul>
                                <li style="display:flex;justify-content:space-between;align-items:center;"><a href="#">Dry Beans</a><a href="#">Lupins</a><li style="display:flex;justify-content:space-between;align-items:center;">
                                <li style="display:flex;justify-content:space-between;align-items:center;"><a href="#">Lentils</a><a href="#">Vetches</a><li style="display:flex;justify-content:space-between;align-items:center;">	
                                <li style="display:flex;justify-content:space-between;align-items:center;"><a href="#">Faba Beans</a><a href="#">Black beans</a><li style="display:flex;justify-content:space-between;align-items:center;">
                                <li style="display:flex;justify-content:space-between;align-items:center;"><a href="#">Dry Peas</a><a href="#">Red Kidney beans</a><li style="display:flex;justify-content:space-between;align-items:center;">
                                <li style="display:flex;justify-content:space-between;align-items:center;"><a href="pulses/chickpeas/index.html">Chickpeas</a><a href="#">Adzuki beans</a><li style="display:flex;justify-content:space-between;align-items:center;">
                                <li style="display:flex;justify-content:space-between;align-items:center;"><a href="#">Cowpeas</a><a href="#">Black gram</a><li style="display:flex;justify-content:space-between;align-items:center;">
                                <li style="display:flex;justify-content:space-between;align-items:center;"><a href="#">Bambara Beans</a><a href="#">Navy beans</a><li style="display:flex;justify-content:space-between;align-items:center;">
                                <li style="display:flex;justify-content:space-between;align-items:center;"><a href="#">Pigeon Peas</a><li>
                             </ul>
                        </div>
                    </li>
                    <li><a href="tea\index.html">Tea</a></li>
                    <li><a href="coffee\index.html">Coffee</a></li>
                    <li><a href="sugarcane/index.html">Sugarcane</a></li>
                    <li><a href="cotton/index.html">Cotton</a></li>
                    <li><a href="corn/index.html">Corn</a></li>
                    <li><a href="tomato/index.html">Tomato</a></li>
                    <li><a href="onion/index.html">Onion</a></li>
                    <li><a href="potato/index.html">Potato</a></li>
                </ul>
             </div>	
        </li>
        <li><a href="#ModernMachine">Modern Machine</a>
            <div class="ModernMachine-float">
                <ul>
                    <li><a onclick="MachinePage('subBodymachine/tractor/index.html')" href="#tractor">Tractor</a></li>
                    <li><a onclick="MachinePage('subBodymachine/cultivator/index.html')" href="#cultivator">Cultivator</a></li>
                    <li><a onclick="MachinePage('subBodymachine/sprayer/index.html')" href="#Sprayer">Sprayer</a></li>
                    <li><a onclick="MachinePage('subBodymachine/baler/index.html')" href="#Baler">Baler</a></li>
                    <li><a onclick="MachinePage('subBodymachine/seeddrill/index.html')" href="#SeedDrill">Seed Drill</a></li>
                    <li><a onclick="MachinePage('subBodymachine/cultipicker/index.html')" href="#Cultipicker">Cultipicker</a></li>
                    <li><a onclick="MachinePage('subBodymachine/cottonpicker/index.html')" href="#Cotton">Cotton Picker</a></li>
                    <li><a onclick="MachinePage('subBodymachine/diskharrow/index.html')" href="#Disk">Disk Harrow</a></li>
                    <li><a onclick="MachinePage('subBodymachine/potatoharvester/index.html')" href="#Potato">Potato Harvester</a></li>
                    <li><a onclick="MachinePage('subBodymachine/threshingmachine/index.html')" href="#Threshing">Threshing Machine</a></li>
                    <li><a onclick="MachinePage('subBodymachine/holedigger/index.html')" href="#PostHoledigger">Post Hole Digger</a></li>
                    <li><a onclick="MachinePage('subBodymachine/plough/index.html')" href="#Plough">Plough</a></li>
                </ul>
             </div>
        </li>
    <divlogin id="loginlogo" style="display:none;">
       <img onclick="login()" height="48px" width="48px" src="image/loginimg.png" />
       <a href="Login.php">Login/Sign</a>
    </divlogin>
    <div onclick="Logout()" id="logout" style="display:none;"></div>
    </ul><div class="rightNav">
       
<form action="search/search.php" method="POST">
<input type="search" name="q" placeholder="Search" id="search">
</form>
    </div>
    
</nav>
<nav id="nav" class="nav"></nav>

<!----------------------subbody----------------------->
    <sub-body class="subBody" id="subBody"></sub-body>
<!---------------------------------------------------->
<!----------------------footer------------------------>
<div id="footer"></div>
<!---------------------------------------------------->    


<script type="module">
  import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js'

  var swiper = new Swiper('.mySwiper', {
  slidesPerView: 1,
  // grabCursor: true,
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});


// Nav open close
const body = document.querySelector('body'),
      navMenu = body.querySelector('.menu-content'),
      navOpenBtn = body.querySelector('.navOpen-btn'),
      navCloseBtn = navMenu.querySelector('.navClose-btn');

if(navMenu && navOpenBtn){
  navOpenBtn.addEventListener("click", () =>{
    navMenu.classList.add("open");
    body.style.overflowY = "hidden";
  })
}

if(navMenu && navCloseBtn){
  navCloseBtn.addEventListener("click", () =>{
    navMenu.classList.remove("open");
    body.style.overflowY = "scroll";
  })
}

// Change header bg color
window.addEventListener("scroll", () => {
  const scrollY = window.pageYOffset;

  if(scrollY > 5){
    document.querySelector("header").classList.add("header-active");
  }else{
    document.querySelector("header").classList.remove("header-active");
  }

  // Scroll up button
  const scrollUpBtn = document.querySelector('.scrollUp-btn');

  if(scrollY > 250){
    scrollUpBtn.classList.add("scrollUpBtn-active");
  }else{
    scrollUpBtn.classList.remove("scrollUpBtn-active");
  }
  
  
  // Nav link indicator

  const sections = document.querySelectorAll('section[id]');
  sections.forEach(section =>{
    const sectionHeight = section.offsetHeight,
          sectionTop = section.offsetTop - 100;

          let navId = document.querySelector(`.menu-content a[href='#${section.id}']`);
          if(scrollY > sectionTop && scrollY <=  sectionTop + sectionHeight){
            navId.classList.add("active-navlink");           
          }else{
            navId.classList.remove("active-navlink");     
          }
          
          navId.addEventListener("click", () => {
            navMenu.classList.remove("open");
            body.style.overflowY = "scroll";
            
          })
  })
})  
  
  // Scroll Reveal Animation
  ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2000,
    delay: 400,
  });
  
  ScrollReveal().reveal(`.section-title, .section-subtitle, .section-description, .brand-image, .tesitmonial, .newsletter 
  .logo-content, .newsletter-inputBox, .newsletter-mediaIcon`, {interval:100,})
  
  ScrollReveal().reveal(`.about-imageContent, .menu-items,.s-cont span,.s-cont li`, {origin: 'left'})
  ScrollReveal().reveal(`.about-details, .time-table`, {origin: 'right'})
  ScrollReveal().reveal(`.s-cont p`,{origin:'top'})
</script>
    <script type="text/javascript">
    function login(){
      window.location="Login.php";
    }
    function Logout(){
        if(confirm ("confirm to Logout")==true){
        window.location="index.php";
    }
    }
    window.onbeforeunload=function(){
    window.location.reload();
    }
        const nav=document.querySelector('.subBody')
        
	fetch('HomeBody.html')
	.then(res=>res.text())
	.then(data=>{
		nav.innerHTML=data
	})
    function Home(){
	fetch('HomeBody.html')
	.then(res=>res.text())
	.then(data=>{
		document.querySelector('.subBody').innerHTML=data
	})
    }
     // <------------------machine------------------->
    function MachinePage($page){
        const nav=document.querySelector('.subBody')
	fetch($page)
	.then(res=>res.text())
	.then(data=>{
		nav.innerHTML=data})
    }

    // <------------------paddy------------------->
    function BasmathiRice(){
	fetch('subBodypaddy/basmati.html')
	.then(res=>res.text())
	.then(data=>{
		document.querySelector('.subBody').innerHTML=data})
    }
    function basmatiCost(){
        fetch('subBodypaddy/basmatiCost.html')
	.then(res=>res.text())
	.then(data=>{
		document.querySelector('.subBody').innerHTML=data})
    }
    function Annapoornna(){
	fetch('subBodypaddy/basmati.html')
	.then(res=>res.text())
	.then(data=>{
		document.querySelector('.subBody').innerHTML=data})
    }
    function AnnapoornnaCost(){
        fetch('subBodypaddy/basmatiCost.html')
	.then(res=>res.text())
	.then(data=>{
		document.querySelector('.subBody').innerHTML=data})
    }
    function PonniRice(){
	fetch('subBodypaddy/ponniRice.html')
	.then(res=>res.text())
	.then(data=>{
		document.querySelector('.subBody').innerHTML=data})
    }
    function PonniRiceCost(){
        fetch('subBodypaddy/basmatiCost.html')
	.then(res=>res.text())
	.then(data=>{
		document.querySelector('.subBody').innerHTML=data})
    }
    function SonaMasuri(){
	fetch('subBodypaddy/basmati.html')
	.then(res=>res.text())
	.then(data=>{
		document.querySelector('.subBody').innerHTML=data})
    }
    function SonaMasuriCost(){
        fetch('subBodypaddy/basmatiCost.html')
	.then(res=>res.text())
	.then(data=>{
		document.querySelector('.subBody').innerHTML=data})
    }
    function IdlyRice(){
	fetch('subBodypaddy/basmati.html')
	.then(res=>res.text())
	.then(data=>{
		document.querySelector('.subBody').innerHTML=data})
    }
    function IdlyRiceCost(){
        fetch('subBodypaddy/basmatiCost.html')
	.then(res=>res.text())
	.then(data=>{
		document.querySelector('.subBody').innerHTML=data})
    }
    function ChampaRice(){
	fetch('subBodypaddy/basmati.html')
	.then(res=>res.text())
	.then(data=>{
		document.querySelector('.subBody').innerHTML=data})
    }
    function ChampaRiceCost(){
        fetch('subBodypaddy/basmatiCost.html')
	.then(res=>res.text())
	.then(data=>{
		document.querySelector('.subBody').innerHTML=data})
    }
    function BarmaBlackRice(){
	fetch('subBodypaddy/basmati.html')
	.then(res=>res.text())
	.then(data=>{
		document.querySelector('.subBody').innerHTML=data})
    }
    function BarmaBlackRiceCost(){
        fetch('subBodypaddy/basmatiCost.html')
	.then(res=>res.text())
	.then(data=>{
		document.querySelector('.subBody').innerHTML=data})
    }
    function HMTRice(){
	fetch('subBodypaddy/basmati.html')
	.then(res=>res.text())
	.then(data=>{
		document.querySelector('.subBody').innerHTML=data})
    }
    function HMTRiceCost(){
        fetch('subBodypaddy/basmatiCost.html')
	.then(res=>res.text())
	.then(data=>{
		document.querySelector('.subBody').innerHTML=data})
    }
    function AizonRice(){
	fetch('subBodypaddy/basmati.html')
	.then(res=>res.text())
	.then(data=>{
		document.querySelector('.subBody').innerHTML=data})
    }
    function AizonRiceCost(){
        fetch('subBodypaddy/basmatiCost.html')
	.then(res=>res.text())
	.then(data=>{
		document.querySelector('.subBody').innerHTML=data})
    }
   
  </script>
    <script type="text/javascript">
 function find1(){ 
   var node=document.querySelectorAll('.wrapper');
   var node1=document.querySelectorAll('.carousel');
   for(let i=0;i<node.length;i++){
    node[i].classList.remove('scroll');
    node1[i].classList.remove('scrollT');
   }
  document.querySelector('.s1').classList.add('scroll');
  document.querySelector('.S1').classList.add('scrollT');
  overScroll();
}
 function find2(){
  var node=document.querySelectorAll('.wrapper');
   var node1=document.querySelectorAll('.carousel');
   for(let i=0;i<node.length;i++){
    node[i].classList.remove('scroll');
    node1[i].classList.remove('scrollT');
   }
  document.querySelector('.s2').classList.add('scroll');
  document.querySelector('.S2').classList.add('scrollT');
  overScroll();
 }
 function find3(){
  var node=document.querySelectorAll('.wrapper');
   var node1=document.querySelectorAll('.carousel');
   for(let i=0;i<node.length;i++){
    node[i].classList.remove('scroll');
    node1[i].classList.remove('scrollT');
   }
  document.querySelector('.s3').classList.add('scroll');
  document.querySelector('.S3').classList.add('scrollT');
  overScroll();
 }
 function find4(){
  var node=document.querySelectorAll('.wrapper');
   var node1=document.querySelectorAll('.carousel');
   for(let i=0;i<node.length;i++){
    node[i].classList.remove('scroll');
    node1[i].classList.remove('scrollT');
   }
  document.querySelector('.s4').classList.add('scroll');
  document.querySelector('.S4').classList.add('scrollT');
  overScroll();
 }
 function find5(){
  var node=document.querySelectorAll('.wrapper');
   var node1=document.querySelectorAll('.carousel');
   for(let i=0;i<node.length;i++){
    node[i].classList.remove('scroll');
    node1[i].classList.remove('scrollT');
   }
   document.querySelector('.s5').classList.add('scroll');
  document.querySelector('.S5').classList.add('scrollT');
  overScroll();
 }



function overScroll(){
    var carousel = document.querySelector('.scrollT'),
firstImg = carousel.querySelectorAll("img")[0],
arrowIcons = document.querySelectorAll('.scroll i');



let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;

const showHideIcons = () => {
    let scrollWidth = carousel.scrollWidth - carousel.clientWidth; 
    arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
    arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
}

arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        let firstImgWidth = firstImg.clientWidth + 14;
        carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
        setTimeout(() => showHideIcons(), 60);
    });
});

const autoSlide = () => {
    if(carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;
    positionDiff = Math.abs(positionDiff); 
    let firstImgWidth = firstImg.clientWidth + 14;
    let valDifference = firstImgWidth - positionDiff;

    if(carousel.scrollLeft > prevScrollLeft) { 
        return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
    }
    carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
}

const dragStart = (e) => {
    isDragStart = true;
    prevPageX = e.pageX || e.touches[0].pageX;
    prevScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    if(!isDragStart) return;
    e.preventDefault();
    isDragging = true;
    carousel.classList.add("dragging");
    positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
    carousel.scrollLeft = prevScrollLeft - positionDiff;
    showHideIcons();
}

const dragStop = () => {
    isDragStart = false;
    carousel.classList.remove("dragging");

    if(!isDragging) return;
    isDragging = false;
    autoSlide();
}

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("touchstart", dragStart);

document.addEventListener("mousemove", dragging);
carousel.addEventListener("touchmove", dragging);

document.addEventListener("mouseup", dragStop);
carousel.addEventListener("touchend", dragStop);
    }

    function scrollmedown1(){
        window.scrollTo({top:570,behavior:"smooth"});
    }
    function scrollmedown2(){
        window.scrollTo({top:2020,behavior:"smooth"});
    }
    function scrollmedown3(){
        window.scrollTo({top:3470,behavior:"smooth"});
    }
    function scrollmedown4(){
        window.scrollTo({top:4920,behavior:"smooth"});
    }
    function scrollmedown5(){
        window.scrollTo({top:6370,behavior:"smooth"});
    }

</script>


 </body>
</html>
<?php }?>
<?php
if(isset($db_username)){
$myuname=$db_username;
$check="false"; }
else{
    $myuname="guest";
    $check="true"; 
}
?>
<script type="text/javascript">
    var geting="<?php print($myuname); ?>";
    var check="<?php print($check); ?>";
    document.getElementById('namer').innerHTML=geting;
    if(check!="true"){
    document.getElementById('logout').style.display="block";
    }else{
        document.getElementById('loginlogo').style.display="flex";
    }
</script>

