<?php
$user[0]='Alex';
setcookie("cookie1", "$user[0]", time()+1800);
for($x=1;$x<=50;$x++){
setcookie("cookie[$x]", "apple", time()+1800);
}
?>
Welcome <?php echo $_COOKIE['cookie1']; ?><br/>
You have set 50 cookies;


