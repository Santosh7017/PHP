<?php
class test{
public $num_one;
public $num_two;
public function __construct(int $test, int $test_two){
    echo($this-> inti(30)."world");
    $this->num_two = $test;
}
public function inti($val){
    echo("hello");
    $this->num_one = $val;
}

public function __destruct(){
    echo $this-> num_one +$this->num_two;
}
}
$obj = new test(40,30,30);
echo $obj->num_one;
$obj->__destruct();
$obj->num_two = 20;
$obj -> __destruct();


?>