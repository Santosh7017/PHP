<?php
// class gla{
//     public $data = 24;
//     private $num = 38;
//     private function task(){
//         echo "Hello";
//     }
//     private function display(){
//         $this->task();
//     }
// }
// $class = new gla();
// // how to call private function directly by object
// // $obj = new ReflectionMethod('gla','task');
// // $obj->setAccessible(true);
// $newobj = new ReflectionProperty('gla','task');
// $newobj->setAccessible(true);
// $newobj-> getValue(new gla);
//Accessing private method in php with parameter
    class Foo {
        private function validateCardNumber($number)
        {   
            echo $number;
        }
    }
    $method = new ReflectionMethod('Foo', 'validateCardNumber');
    $method->setAccessible(true);

    echo $method->invoke(new Foo(), '1234-1234-1234');
    
?>