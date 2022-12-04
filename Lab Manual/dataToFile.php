
<?php

$data = $_POST['data'];
$var = fopen("data.txt","w");
    fwrite($var, $data);
    
?>