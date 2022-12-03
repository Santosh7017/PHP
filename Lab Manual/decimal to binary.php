

<?php



$number = $_POST['number'];

if(isset($_POST['toBinary'])){
    echo (decbin($number));
}elseif(isset($_POST['toDecimal'])){
    echo (bindec($number));
}elseif(isset($_POST['round'])){
    $decimals = (int)($_POST['decimals']);
    echo(round($number,$decimals) . "<br>");
}

// rounding of a given number to respected decimal points.




?>
