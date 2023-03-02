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

if(isset($_POST['delete'])){
    $delete_query = "DELETE from mylab";
    if($connection->query($delete_query)){
        echo "Table data deleted";
    }
}





    ?>
</body>
</html>
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="./database.php" method="post">
    <table>
        
        <tr>
            <td><label for="">Name:</label></td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td><label for="">Phone No.</label></td>
            <td><input type="number" name="number"></td>
        </tr>
      

        <tr>
        </table>
        <table>
            <td><input type="submit" name="insert" value="insert"></td>
        
            <td><input type="submit" name="update" id="update" ></td>
            <td><input type="submit" name="delete" value="delete" ></td>
            <td><input type="submit" name="display" value="display"></td>
            
        </tr>
        </table>
    
</form>
    
</body>
</html>
 -->
