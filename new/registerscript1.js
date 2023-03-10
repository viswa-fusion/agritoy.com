var form=document.getElementById("main");
var uname=document.getElementById("uname");
var email=document.getElementById("email");
var pass1=document.getElementById("pass01");
var pass2=document.getElementById("pass02");


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
     pass1.style.borderBottom ='2px solid white';
     pass1.style.color='red';
     document.querySelector('#layer1').classList.add('icon1'); 
     document.querySelector('#topIcon').classList.add('topIcon2');
     document.querySelector('#layer1').style.visibility='visible';                       
     document.querySelector('#layer').classList.add('layer');
     return false;
     }
     }
    if(pass1.value!=pass2.value){
        form.pass02.style.borderBottom ='2px solid red';
        form.pass02.style.color='#ffffff';
        document.querySelector('#layer').classList.add('layer');
        document.querySelector('#layer1').classList.remove('icon1');
        document.querySelector('#topIcon').classList.remove('topIcon2');
        document.querySelector('#layer1').style.visibility='hidden';
        return false;
    }
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
    if(uname2.length >= 3){
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









