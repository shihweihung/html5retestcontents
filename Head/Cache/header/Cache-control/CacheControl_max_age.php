<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<?
header("Cache-Control: max-age=60");
?>
<title>Header Cache-Control</title>
</head>
<body>
<p>This page contains the following tag in its
  <head> section:
  
  header("Cache-Control: max-age=600");
  
</p>
<p><img src="../../src/test_image.jpg" width="398" height="298" alt=""></p>
</body></html>