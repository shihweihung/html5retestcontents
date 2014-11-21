<?php
$expire=time()+60*60*24*365;
setcookie("user", "Tester", $expire);

echo "You already set a cookie name USER and value is ". $_COOKIE["user"] ."."
?>  

