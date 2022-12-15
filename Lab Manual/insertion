<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    if(isset($_POST['save']))
    {
        $name= $_POST['name'];
        $email= $_POST['email'];
        $connection_detail = new mysqli('localhost','root','','sec_i');
        if(!$connection_detail){
            echo "failed";
        }
     $insert_query ="INSERT INTO registration(`name`,`email`) VALUE('$name','$email')";
     if($connection_detail-> query($insert_query))
     {
        echo "registered success";
        
     } 
     else{
        echo"connection failed";
     }
    }
    
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>name:</label>
        <input type="text" placeholder="name" name="name"/><br>
        <label>email:</label>
        <input type="email" placeholder="email" name="email"/><br>
        <input type="submit" name="save">

    </form>
</body>
</html>
