<?php

// what is session
// used to manage  information across different pages 


// 
session_start();
echo "welcome" .$_SESSION['usersname'] = "Harry";

$_SESSION['favCat'] = "books";
echo "We have saved your session";
?>