function starTime(){
    var today = new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
       //Add a zero infront of numbers < 10
    h=addZero(h);
    m=addZero(m);
    s=addZero(s);

    document.getElementById('txt').innerHTML = h + ":" + m + ":" + s + ":";
    t = setTimeout('startTime()', 500);
}
function addZero(){
if(i<10){
    i = "0" + i;
}
return i;
}