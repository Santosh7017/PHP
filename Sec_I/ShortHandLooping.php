<?php

// $num = 1;
// while ($num <= 10){
//     echo "yash ";
   
//     if($num ==5){
//         break;
//     }
//     $num++;
// }

for($num = 1;$num <=10;$num++){
    for($count = 1;$count <=10;$count++){
        if($count == 5 or $num == 1){
            break 2;

        }
        ehco $num.$count." ";
    }
    echo "<br>";
}


?>