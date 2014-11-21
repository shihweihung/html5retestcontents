<html>
<body>

<?php
if (isset($_COOKIE["user"]))
  echo "Welcome <font color='red'>". $_COOKIE["user"] ."</font>!<br />";
else
  echo "Welcome guest!<br />";
?>

</body>
</html>
