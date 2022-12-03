<?php
setcookie("name", "bhaag bhootnike aandhi aai", time()+60);
if($_COOKIE['name'])
{
    echo("cookie hai apne paas ". $_COOKIE['name']);
}
else{
    echo("nehi bhaagu ga");
}
setcookie("name","",time()-3);
