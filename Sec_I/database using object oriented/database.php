<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="" method="post">
            <input type="text" name="name" >
            <input type="email" name="email">
            <input type="submit" value="submit" name="submit">

        </form>

    <?php
    if(isset($_POST['submit'])){
        $username = $_POST['name'];
        $email = $_POST['email'];
    }
    $connection = new mysqli('localhost','root','','sec_i');
    $insert = "INSERT INTO mylab(username,email) values ('$username','$email')";
    if($connection->query($insert)){
        echo "Data inserted succesfully";
    }



    ?>
</body>
</html>