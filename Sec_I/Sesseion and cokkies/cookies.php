<?php

// setcookie(fg,"",time()+8400,"/");
// setcookie("name","This is example of cookie", time()+16);
// setcookie("name",get_current_user(), time()+16);
// if(isset($_COOKIE['name']))
// {
//     echo     $_COOKIE['name'];
// }
// else{
//     echo "cookie is not applied";
// }
// setcookie("name","",time()-10");
?>


<?php
// echo "Welcome to the world of cookies <br>";


// setcookie("category", "Books", time()+60);


// Set cookie with user's name and IP address
$name = $_POST['name'];
$ip_address = $_SERVER['REMOTE_ADDR'];
setcookie('user_info', $name . $ip_address, time() + 3600);
$info =  $_COOKIE['user_info'];
echo $info;


// Redirect to home page
// header('Location: /');
?>