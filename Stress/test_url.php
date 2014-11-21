<html>
<body>
This page use to count how many characters are inputted. <br />
Check browser support how maxium url length. <br />
<?php
Echo "'";
$string=$_GET["url_length"];
$fix=76
Echo strlen($string) + $fix;
Echo "'";
?>
<br />
Above number is character number you input.
</body>
</html>