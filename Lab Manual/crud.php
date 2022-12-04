
    <?php
    $connection = new mysqli('localhost','root','','sec_i');
    $username = $_POST['name'];
    $email = $_POST['email'];
    if(isset($_POST['submit'])){
        $insert = "INSERT INTO mylab(username,email) values ('$username','$email')";
         
    if($connection->query($insert)){
        echo "Data inserted succesfully";
    }
    }
    
   
if(isset($_POST['display'])){
    $display = "SELECT * FROM mylab";
    $result = $connection-> query($display);
    if($result-> num_rows > 0){
        while($row = $result->fetch_assoc()) {
          echo "username: ". $row['username']." ||" . "   Email: ". $row['email']. "<br  >";
          }
    }else{
        echo "Table is empty";
    }
}

    if(isset($_POST['update'])){
        $update = "UPDATE mylab SET username='$username' WHERE email='$email'";
    if($connection->query($update) == TRUE){
        echo "Data updated succesfully";
    }else{
        echo "Updation was Unsuccesfull";
    }
    }


if(isset($_POST['delete'])){
    $delete = "DELETE FROM mylab;";
    if($connection->query($delete) == TRUE){
        echo "Data deleted succesfull";
    }else{
        echo "Deletion Unsuccesfull";
    }
}
    ?>
