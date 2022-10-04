<?php
$num_one = $_POST['num_one'];
$num_two = $_POST['num_two'];
// echo $num_one + $num_two;

if(isset($_POST['add'])){
    echo $num_one + $num_two;
}elseif(isset($_POST['sub'])) {
    echo $num_one - $num_two;

}elseif(isset($_POST['mul'])) {     
    echo $num_one * $num_two;

}elseif(isset($_POST['div'])) {
    echo $num_one / $num_two;

}



?>