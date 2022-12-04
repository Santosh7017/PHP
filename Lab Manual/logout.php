<?php
session_start();
if(isset($_SESSION['user']))
{
    unset($_SESSION['user']);
    echo "You have been Logout Succesfully";

}
else{
    echo "You have been Logout Succesfully";
}