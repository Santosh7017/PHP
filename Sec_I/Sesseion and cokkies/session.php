<?php
//10:13:21
// setcookie("hello"(cookie name),"sahil is a good boy but falls under bad company(cookie value)",time()+40,"/da.php")
?>
<?php

setcookie("hello",getenv('REMOTE_ADDR'),time()+40);
if(isset($_COOKIE['hello']))
{
    echo $_COOKIE['hello'];
}
else{
    echo"first create cookie";
}
?>