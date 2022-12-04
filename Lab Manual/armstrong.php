<?php
class armstrong{
  public function armstrongCheck($number){
        $sum = 0;
        $x = $number;
        while($x != 0)
        {
            $rem = $x % 10;
            $sum = $sum + $rem*$rem*$rem;
            $x = $x / 10;
        }
        
        if ($number == $sum)
            return 1;
        
        return 0;
    }
}
$obj = new armstrong();

$number = $_POST['number'];


 $flag = $obj -> armstrongCheck($number);

 if ($flag == 1)
     echo "Given Number is Armstrong";
 else
     echo "Number is Not armstrong"
 ?>
 