<?php
declare(strict_types=1);
// define("value","sdfhsdufuh");
// $value = value."398";
// echo value;

// class ibm{
//     public $rooms = 5;
//     public function __destruct(){
//         echo $this -> rooms = 4;
//     }
// }
// $obj = new ibm();
// echo $obj->rooms;

// function  heron(float $s, float $b, float $c, float $a) : float
// {

//  $res = sqrt($s*(($s-$a)*($s-$b)*($s-$c)));
//  return floatval($res);
// }
// echo heron(1.2,2.2,3.4,4.32);
function findTriangleArea(float $a, float $b, float $c,float $s) {
  
    $area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
  
    
    return $area;
  }

?>
<!-- <input type="text" name="area" value="" readonly> -->
<?php echo findTriangleArea(1, 7, 9,5); ?>