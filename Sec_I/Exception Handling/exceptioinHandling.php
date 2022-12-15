<!-- $_SERVER show the current locatoin -->
<?php
error_reporting(0);
echo "<form action='$_SERVER[PHP_SELF]' method='post'>
Enter Value of numerator <input type='number' name='numerator'></input>
Enter the value of Denominator <input type='number' name='denominator'>
<input type='submit' name='result' value='output'><br></form>";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // echo "HELLO ";

    $num = $_POST['numerator'];
    $den = $_POST['denominator'];
    class DivisionByzeroo extends Exception{
        function errorMessage(){
            return $this -> getMessage();
        }
    }
    try{
    if($den == 0){
        // throw new Exception("Provide a valid number except 0");
        throw new   DivisionByzeroo("Provide a valid number except 0");
    }
    // }catch(Exception $eg){
    }catch(DivisionByzeroo $eg){
        echo $eg -> x();
    }
}




?>