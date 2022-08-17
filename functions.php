<?php

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as  $value) {
       $sum += $value;
    }
    return $sum;
}

$student = [34,34,56,32,67,34];
$totalMarks = processMarks($student);

echo "Total Marks = $totalMarks";




?>