<?php
// for($i=1;$i<=100;$i++)
// {
//     if($i%3==0 && $i%5==0){
        
//         echo "FULLSTACK"."<br>";
//     }
//     elseif($i%5==0){
//         echo "BACKEND" ."<br>";
//     }
//     elseif($i%3==0){
//       echo "FRONTEND" ."<br>";
//     }
//     else{
//         echo "<br>" ;
//     }
// }


function Factorial($num){
    $sum = 1;
    for($index = 1; $index <= $num; $index++){
        $sum = $sum*$index;
    }
    echo "Factorial of $num! is :".$sum;
}
function Area($num){
    $area = $num*$num;
    echo "Area of square is :".$area;
}
function Prime($num){
    $count = 0;
    for($index = 2; $index <= $num; $index++){
        if($num % $index == 0){
            $count++;
        }
    }
    if($count > 1){
        echo "Not a Prime Number";
    }
    else{
        echo "Prime Number";
    }
}
$variable = 0;
$num = 5;
Prime($num);
// if(isset($_POST['factorial'])){
//     $variable = 1;
// }
// elseif(isset($_POST['prime'])){
//     $variable = 3;
// }
// elseif(isset($_POST['area'])){
//     $variable = 2;
// }
// switch ($variable) {
//     case '1':
//         Factorial($_POST['number']);
//         break;
//     case '2':
//         Area($_POST['number']);
//         break;
//     case '3':
//         Prime($_POST['number']);
//         break;
    
//     default:
//         echo "Good Bye ;
//         break;
// }

?>
