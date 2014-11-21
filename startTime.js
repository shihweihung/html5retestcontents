function startTime()
{
var today=new Date();
var Y=today.getFullYear();
var M=today.getMonth()+1;
var D=today.getDate();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML=Y+"/"+M+"/"+D+" "+h+":"+m+":"+s;
t=setTimeout(function(){startTime()},500);
}

function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}