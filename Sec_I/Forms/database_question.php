<!-- write a php script to design a login page and show the message to user when fields are filled  and display a alert message using java script when fields are empty;-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  
    <form action="../Exception Handling/index.php" method="POST">
        
        <input type="text" name="name" id="" placeholder="Enter name" required>
        <input type="email" name="email" id="" placeholder="Enter email" required>
        <input type="password" name="password" id="" placeholder="Enter password" required>
        <input type="submit" name="submit"  >
       
    </form>
    
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Data filled succesfully")';  
        echo '</script>'; 
    }else{
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Please fill the form")';  
    echo '</script>';  
    }



  $name = $_POST['name']  ;
  $email = $_POST['email'];
?>
