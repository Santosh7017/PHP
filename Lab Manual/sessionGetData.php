<?php
session_start();

echo "welcome" .$_SESSION['usersname'];
echo "<br>  your favorite category is ". $_SESSION['favCat'];

?>