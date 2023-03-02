<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="sec_i";


// Create connection
$connection_details = mysqli_connect($servername, $username, $password,$database);

//  Check connection
if (!$connection_details) {
  die("Connection failed: " . mysqli_connect_error());
}else{
echo "Connected successfully";
}
// $id=$_POST['id'];
// $username=$_POST['uname'];
// $contact=$_POST['contact'];
// $email = $_POST['eml'];

// $connection_details=mysqli_connect("localhost","root","","database");


// insert
if(isset($_POST ['save'])){
$sql="INSERT   into forms(uname,contact,email,id) VALUES ('$username','$contact','$email','$id')";
 if(mysqli_query($connection_details,$sql))
 {
  echo "<script>alert('new record inserted')</script>";
  header("location:forms.html");
  // header("refresh:5, url= secm.html");
 }
}

// print
 if(isset($_POST['display']))
{
    $display_query="SELECT * FROM forms ";
    $result = mysqli_query($connection_details, $display_query);

    if (mysqli_num_rows($result) > 0) {
     
      while($row = mysqli_fetch_assoc($result)) {
        echo . $row["id"]. "  Name: " . $row["uname"]. " " . $row["contact"]." ". $row["email"]. " "."<br>";
      }
    } else {
      echo "0 results";
    }
  }
    
//     mysqli_close($connection_details);



//     if(isset($_POST['save']))
// 	{
// 		$name = $_POST['fname'];
// 		$em = $_POST['eml'];
// 		$passwr = $_POST['psw'];
// 	$con=mysqli_connect('localhost','root','','sectionm');
// 	if(!$con)
// 	{
// 		echo "You are not connect to the server";
// 	}
// 	 $sql="insert into validname(uname,email,passwordd) values ('$name','$em','$passwr')";
// 	if(mysqli_query($con, $sql))
// 	{
// 		echo "record inserted succefully";
// 		header("refresh:5,url=secm.html");
// 		header("location:secm.html");
// 	}
// }
// ​
// if(isset($_POST['display']))
// 	{
// 	$con=mysqli_connect('localhost','root','','sectionm');
// 	if(!$con)
// 	{
// 		echo "You are not connect to the server";
// 	}
// 	 $sql="SELECT id,uname,email,passwordd FROM validname";
// 	 $result=mysqli_query($con, $sql);
	
// 	 if(mysqli_num_rows($result)>0)
// 	 {
// 	 	 echo "<table border='1'>
// 	 <tr>
// 	 <th>Id</th>
// 	 <th>Username</th>
// 	 <th>Email</th>
// 	 <th>Password</th>
// 	 </tr>";
// ​
// 	 while($row=mysqli_fetch_array($result))
// 	 {    
// 	 	echo "<tr><form action=secm.php method=post>";
// 	 	echo "<td><input type=text name=id readonly value='".$row['id']."'></td> ";
// 	 	echo "<td><input type=text name=username value='".$row['uname']."'></td> ";
// 	 	echo "<td><input type=text name=email value='".$row['email']."'></td> ";
// 	 	echo "<td><input type=text name=password value='".$row['passwordd']."'></td> ";
	 	
// 	 	echo "<td><input type=submit value=Update name=update>";
// 	 	echo "<td><input type=submit value=Delete name = delete>";
// 	 	echo "</form></tr>";
// 	 }
// }
// else
// {
// echo "No rows found";
// } 
// echo "</table>";
// }


// update-------------------------------------------------------------------------
if(isset($_POST['update']))

  $sql="UPDATE validname SET uname='$name'WHERE id='$eid'";
  if(mysqli_query($con,$sql))
  {
  	echo "updated";
  }

// delete
if(isset($_POST['delete']))
{
	$delete = "DELETE FROM myTable";
  if(mysqli_query($con,$delet)){
    echo "Data deleted from table succesfully";
  }else{
    echo "data can not be deleted";
  }
}


// $servername = "Localhost";
// $username = "root";
// $password = "";
// $database= "sec_i";


 

   ?>