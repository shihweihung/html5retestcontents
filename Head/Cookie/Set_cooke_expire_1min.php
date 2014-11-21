<?php
$expire=time()+60;
setcookie("user1", "Melco", $expire);
if (isset($_COOKIE["user1"])) {
	echo"Cookie <font color='red'>". $_COOKIE["user1"] ."</font> has been set.";
	echo"<br>";
	echo"Cookie will be deleted in 1 minute.";
	echo"<br>";
	echo"Reload the page after 1 minute and won't see the cookie.";
	}
else
	echo"Cookie has been expired.";
?>  

