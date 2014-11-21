<html>
<body>
<?php
header("Cache-Control: no-store, no-cache, must-revalidate");
?>
Welcome <?php echo $_POST["text"]; ?>!<br>
You are <?php echo $_POST["textarea"]; ?>.<br>
Your password is <?php echo $_POST["password"]; ?><br>
You are <?php echo $_POST["gender"]; ?><br>
Do you merry? <?php echo $_POST["merry"]; ?><br>
How old are you? <?php echo $_POST["age"]; ?><br>
What are your hobbies? <br><?php $test=$_POST['hobbies'];
	if ($test){
	 foreach ($test as $t){echo 'Your hobbies are ',$t,'<br />';}
	} ?><br>
<form method="post" action="key.php" name="key">  
Key:<input size="10" maxlength="10" name="key">
<input type="submit">
</form>	
</body>
</html>