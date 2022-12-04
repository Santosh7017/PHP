<?php
session_start();
if(isset($_SESSION['user']))
{
    echo "welcome"."<h3 style='color:red' align='right'>".$_SESSION['user']."</h3>";
    echo "<h4>You are scrolling Details page data</h4>";
    echo "<a href='home.php'>Click here for navigate to Home Page</a>";
    echo "<br><a href='logout.php'><input type=submit name=logout value=logout></a>";

}
else{
    echo "<script>location.href='login.html'</script>";
}