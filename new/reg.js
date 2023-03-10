var form=document.getElementById("main");
var uname=document.getElementById("uname");
var email=document.getElementById("email");
var pass1=document.getElementById("pass01");
var pass2=document.getElementById("pass02");

/* uname.addEventListener('textInput', nameVerify);
 email.addEventListener('textInput', emailVerify); 
 pass1.addEventListener('textInput', passVerify);
pass2.addEventListener('textInput', pass1Verify); */
function mainVerify1(){
    document.getElementById('email').disabled=false;

    if(uname.value.length < 3){
        form.uname.style.borderBottom='2px solid red';
        form.uname.style.color='#ffffff';
        return false;
    }
    if(email.value.length < 14){
        form.email.style.borderBottom ='2px solid #e9ff91';
        form.email.style.color='#ffffff';
        return false;
    }
    if(pass1.value.length < 6 && pass1.value.length >12 && pass1.value.length != ''){
        form.pass01.style.borderBottom ='2px solid red';
        form.pass01.style.color='#ffffff';
        return false;
    }
    if(pass1.value!=pass2.value){
        form.pass02.style.borderBottom ='2px solid red';
        form.pass02.style.color='#ffffff';
        return false;
    }
}
function mainVerify(){
    if(uname.value.length < 3){
        form.uname.style.borderBottom='2px solid red';
        form.uname.style.color='#ffffff';
        return false;
    }
    if(email.value.length < 14){
        form.email.style.borderBottom ='2px solid #e9ff91';
        form.email.style.color='#ffffff';
        return false;
    }
    if(pass1.value.length < 6 && pass1.value.length >12){
        form.pass01.style.borderBottom ='2px solid red';
        form.pass01.style.color='#ffffff';
        return false;
    }
    if(pass1.value!=pass2.value){
        form.pass02.style.borderBottom ='2px solid red';
        form.pass02.style.color='#ffffff';
        return false;
    }
}

uname.oninput=function(){
   var uname2=uname.value.trim();
    if(uname2.length >= 2){
        document.getElementById("uname").style.borderBottom="2px solid #e9ff91";
        document.getElementById("uname").style.color="#e9ff91";
        return true;
    }else{
        document.getElementById("uname").style.borderBottom="2px solid white";
        document.getElementById("uname").style.color="white";
        return false;
    }
}




pass1.oninput=function(){
    pass3=pass1.value.trim();
    if(pass3.length >= 5){
        document.getElementById("pass01").style.borderBottom="2px solid #e9ff91";
        document.getElementById("pass01").style.color="#e9ff91";
        return true;
    }else{
        document.getElementById("pass01").style.borderBottom="2px solid white";
        document.getElementById("pass01").style.color="white";
        return false;
    }
}
pass2.oninput=function(){
    if(pass3==pass2.value){
        document.getElementById("pass02").style.borderBottom="2px solid #e9ff91";
        document.getElementById("pass02").style.color="#e9ff91";
        return true;
}else{
    document.getElementById("pass02").style.borderBottom="2px solid white";
        document.getElementById("pass02").style.color="white";
        return false;
}
}









