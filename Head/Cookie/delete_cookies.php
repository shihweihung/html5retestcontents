<?php  
  
foreach ($_COOKIE as $k=>$v)  
{  
  
    if (is_array($_COOKIE[$k]))  
    {  
  
        foreach ($_COOKIE[$k] as $key=>$val)  
        {  
            setcookie($k.'['.$key.']',"", time()+3600*24*(-100));  
        }  
    }  
  
    setcookie($k,"", time()+3600*24*(-100));  
}  
?>  

