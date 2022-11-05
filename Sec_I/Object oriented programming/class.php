<?php
// class gla{
//     public $admission = 'open';
//     private $exam = 'endterm';
//     protected $result = 'pass';
//     public function __construct(){
//         echo "welcome to the constructor";

//     }
//     public function display(){
//        $this->admission= "opening soon";                           // * sudo variable;
//     // echo "empty";
//     }
// }
// $stu_gla = new gla;
// $stu2_gla = new gla();
// var_dump($stu_gla);
// echo $stu_gla->admission;
// $stu2_gla->admission = 'midterm';
// echo $stu2_gla->admission;
// $stu_gla->college();
// echo $stu_gla->admission."<br>";
// $stu2_gla->admission = 'closed';
// echo $stu_gla->admission."<br>";
// echo $stu2_gla->admission."<br>";
// $stu_gla->display();
// echo $stu_gla->admission."<br>";
// $stu2_gla -> admission= "coming soon";
// echo $stu_gla -> admission."<br>";

class base{
    public $dta = "sets";
    public function __construct(){
        $this->data = 'unset';
    }
    public function display(){
        $this->data = 'new';
    }
    public function __destruct(){
        echo "end"."<br>";
    }
}
$obj_one = new base();
$obj_one-> display();
$obj_two = new base;
echo $obj_two -> data."<br>";
echo $obj_one-> data."<br>"; 
?>