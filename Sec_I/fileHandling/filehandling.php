 <?php

// $var = fopen("add.php","w");
// fwrite($var, "hello");

$var = fopen("sec-i","w");
fwrite($var, "hello /n class");

// $open = fopen("sec-i","r");
// $size = filesize("sec-i")  // return value in bytes
// //  $var2 = fread($open, $size);
// // echo "fgets("sec-i")";
// while(feof("sec-i")){

// }

$var = fopen("sec-i","w+");
while(!feof($var)){
        echo fgets($var);
}
// unlink("sec-i"); // delete file;
// echo file_exists("sec-i");
// fclose($var);
echo $_SERVER("sec-i");



?>