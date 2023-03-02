<!-- input control  -->
<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];


// echo "$name $phone $email ";

$connection = mysqli_connect("localhost","root","","sec_i");
if(!$connection){
    die("problem in connection");
}
if(isset($_POST['save'])){
  $insert = "INSERT INTO form(name,phone,email) values ('$name','$phone','$email')";
  if(mysqli_query($connection,$insert)){
    echo "insertion succesfull";
    header("refresh:3,url=forms.html");
  }else{
    echo "unable to register";
  }

}
if(isset($_POST['display'])){
  $display = "SELECT name,phone,email,id from form";
  $result =  mysqli_query($connection,$display);
  if(mysqli_num_rows($result) > 0){
    while($data = mysqli_fetch_assoc($result)){
           
            echo $data['name'];
            echo $data['phone'];
            echo $data['email'];
            echo $data['id'] . "<br>";
    }
  }else{
    echo "no record found";
  }
}

?>