<!-- 
    d - day of the month, 2 digit with leading zeros;
D - a textual representation of a day, three letters
j - day of the month without leading zend_version
l - A full textual representation of the day of the week
N - ISO-8601 numeric representation of the day of the week
S - English ordinal suffix for the day of the month, 2 characters
w - Numeric representation of the dau of the week
z - the day of the year (starting from 0)


w  - ISO-8690 week number of the day of the week

 -->


<?php
echo "Welcome to the world of dates <br>";
$d = date("l");
echo "Today date is $d <br>";
?>