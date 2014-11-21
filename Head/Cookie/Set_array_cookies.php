<?php  
  
setcookie("cookie1[0]", "cookiethree");  
  
setcookie("cookie1[1]", "cookietwo");  
  
setcookie("cookie1[2]", "cookieone");  
  
// after the page reloads, echo them out  
  
if (isset($_COOKIE['cookie1']))  
{  
  
    foreach ($_COOKIE['cookie1'] as $name => $value)  
    {  
  
        echo "cookie1[$name] : $value <br />n";  
    }  
}  
  
?>  

