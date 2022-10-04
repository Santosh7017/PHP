<?php


// $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
// echo substr(str_shuffle($data), 0, 7);



// $str1 = 'facebook';
// $str2 = 'faceboll';
// $str_pos = strspn($str1 ^ $str2, "\0");
// printf('First difference between two strings at position %d: "%s" vs "%s"',
// $str_pos, $str1[$str_pos], $str2[$str_pos]);

    $str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
    $arr = explode("\n",$str);
    echo var_dump($arr);

    ?>