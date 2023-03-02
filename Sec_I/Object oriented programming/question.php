<?php
class test{
public $num_one;
public $num_two;
public function __construct(int $test){
    echo($this-> inti(10)."world");
    $this->num_two = $test;
}
public function inti($val){
    echo("hello");
    $this->num_one = $val;
}

public function __destruct(){
    // echo"<br> Num 1 <br> ";
    echo $this-> num_one +$this->num_two;
}
}
$obj = new test(20);
echo $obj->num_one;
$obj->__destruct();
$obj->num_two = 10;
// $obj -> __destruct();


?>