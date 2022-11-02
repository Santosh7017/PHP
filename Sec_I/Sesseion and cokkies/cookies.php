<?php

// setcookie(fg,"",time()+8400,"/");
// setcookie("name","This is example of cookie", time()+16);
setcookie("name",get_current_user(), time()+16);
if(isset($_COOKIE['name']))
{
    echo $_COOKIE['name'];
}
else{
    echo "cookie is not applied";
}
// setcookie("name","",time()-10");
?>
