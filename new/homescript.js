setInterval(displayclock,200);
function displayclock(){
    var time=new Date();
    var hrs=time.getHours();
    var min=time.getMinutes();
    var sec=time.getSeconds();
    var pe="AM";

    if(hrs>11){
        pe="PM";
    }
    if(hrs>12){
        hrs=hrs-12;
    }
    if(hrs==0){
        hrs=12;
    }
    if(hrs<10){
        hrs='0'+hrs;
    }
    if(min<10){
        min='0'+min;
    }
    if(sec<10){
        sec='0'+sec;
    }
    var username="game";

    document.getElementById('clock').innerHTML=hrs+':'+min+':'+sec+' '+pe;
}

