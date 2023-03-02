<?php

for($row = 0;$row<10;$row++){

    for($column = 0;$column<10;$column++){
        echo $row.$column. " ";
    }
    echo "<br>";
}

echo "<table style='border:2px solid red; border-collapse:collapse'>";
for($row = 0;$row<10;$row++){
    echo "<tr>";
    for($column = 0;$column<10;$column++){
        echo "<td style ='border:2px; border:2px solid black'>".$row.$column;
       
    }
    echo "<br>";
}
echo "</table>";


$counter = 0;
echo "<table style ='border:2px solid red;border-collapse:collapse'>";
for($row = 1;$row <=10;$row++){
    echo "<tr>";
    for($col = 1;$col <=10;$col++){
        echo "<td style = 'border:2px solid black'>".$counter."</td>";
        $counter++;
    }
    echo "</tr>";

}
echo "</table>";

// echo "Hello world";

echo "<table  style = 'border:2px solid black; border-collapse: collapse;' align='center' >" ;
for($row = 1;$row <= 8;$row++){
    echo "<tr>";
    for($column = 1; $column <= 8;$column++){
        if(($row + $column)%2 == 0){
            
        echo "<td style = 'background:black; height:80px; width:80px;'>"."</td>" ;
    }else{
        echo "<td style = 'background:white; height:80px; width:80px; '>"."</td>" ;
    }
    }
    echo "</tr>";
}
echo "</table>";



echo "<table  style = 'border:2px solid black; border-collapse: collapse;' >" ;
for($row = 1;$row <= 8;$row++){
    echo "<tr>";
    for($column = 1; $column <= 8;$column++){
        if(($column)%2 == 0){
            
        echo "<td style = 'background:black; height:100px; width:100px'>"."</td>" ;
    }else{
        echo "<td style = 'background:white; height:100px; width:100px'>"."</td>" ;
    }
    }
    echo "</tr>";
}
echo "</table>";



echo "<table style = 'border:2px solid red; border-collapse: collapse'>";
for($row = 2;$row <= 10;$row++){
    echo "<tr>";
    for($column = 1; $column <= 10;$column++){
        
        echo "<td style = 'border:2px solid blue; '>"."$row * $column = ".$row * $column."</td>" ;
    }
    echo "</tr>";
}
echo "</table>";

$counter = 0;
// echo "<table style ='border-collapse:collapse'>";
echo "<table style = 'border-collapse: collapse'>";
for($row = 1;$row<10;$row++){
    echo "<tr>";
    for($column = 0;$column < $row;$column++){
        echo "<td style = 'border:2px solid black'>".$counter."</td>";
        $counter++;
    }
    echo "</tr>";
   
    
}
echo "</table>";

?>