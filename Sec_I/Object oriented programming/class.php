<?php
class gla{
    public $admission = 'open';
    private $exam = 'endterm';
    protected $result = 'pass';
}
$stu_gla = new gla;
$stu2_gla = new gla();
// var_dump($stu_gla);
// echo $stu_gla->admission;
$stu2_gla->admission = 'midterm';
echo $stu2_gla->admission;
?>