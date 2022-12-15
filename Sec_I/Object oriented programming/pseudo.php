<?php
class gla{
    public $data = 24;
    private $num = 38;
    private function task(){
        echo "Hello";
    }
    private function display(){
        $this->task();
    }
}
$class = new gla();
// how to call private function directly by object
$obj = new ReflectionMethod('gla','task');
$obj->setAccessible(true);
$obj->invoke(new gla);
$newobj = new ReflectionProperty('gla','task');
$newobj->setAccessible(true);
$newobj-> getValue(new gla);
?>