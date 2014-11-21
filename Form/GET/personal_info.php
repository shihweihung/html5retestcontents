<html>
<body>
<?php
header("Cache-Control: no-store, no-cache, must-revalidate");
?>
Welcome <?php echo $_GET["text"]; ?>!<br>
You are <?php echo $_GET["textarea"]; ?>.<br>
Your password is <?php echo $_GET["password"]; ?><br>
You are <?php echo $_GET["gender"]; ?><br>
Do you merry? <?php echo $_GET["merry"]; ?><br>
How old are you? <?php echo $_GET["age"]; ?><br>
What are your hobbies? <br><?php $test=$_GET['hobbies'];
	if ($test){
	 foreach ($test as $t){echo 'Your hobbies are ',$t,'<br />';}
	} ?><br>
</body>
</html>