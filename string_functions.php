<?php

$name = "Santosh Kumar Morya";
echo $name;

echo"<br>";

echo "length of" . "my string is " . strlen($name);

echo"<br>";

echo "Total words " . str_word_count($name);
echo "<br>";

echo strrev($name);
echo "<br>";

echo strpos($name, "Morya");
echo "<br>";

echo str_replace("Kumar", "", $name);
echo "<br>";

echo str_repeat($name, 2);
echo "<br>";
echo "<pre>";

echo rtrim("   World is beautiful  ");
echo "<br>";

echo ltrim("      World is beautiful    ");

echo "</pre>";




?>
