<?php
$str="";
	for($x=1;$x<=4096;$x++){
	$str.="z";
	}
	echo "<br>";
	echo $str;
	echo "<br>";
$expire=time()+60*60*24*365;	
setcookie("cookie4097", $str, $expire);

?>
<html>
<body>
<?php
echo "Welcome <br/>";
echo "<p>";
echo "You have set a cookie which <font color='red'>". $x ." </font>length.";
echo "<p>";
echo "Basically, the limitation of one cookie size is 4096 characters.";
?>
</body>
</html>
