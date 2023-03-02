<?php

function floyed(int $num){
    $val = 1;
    for($start=1; $start<=$num; $start++){
        for($count=1; $count<=$start; $count++){
            echo "$val ";
            $val++;
        }
        
        echo "<br>";
    }
}
floyed(8);
?>