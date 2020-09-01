<?php
$qnum = "Question A2";
?>

<!DOCTYPE html>
<html>
<head><title>PHP Questions</title></head>
<style>
    label { display: inline-block; width: 150px; text-align: right; }
    body {background-color: powderblue; color:purple;}
</style>
<body>
<a href="/LPU-CAP525"><h2>GO back to LPU FOLDER</h1></a>
<h1><?= htmlentities($qnum); ?> </h1>
<xmp>Write a PHP program to read any two values and to find addition, subtraction.
multiplication, division and modulus with help of give data by using switch case by
choosing the given options.
+ > r = a+b
— > r = a—b
* > r = a*b
/ > r = a/b
% > r = a%b
otherwise “wrong symbol”</xmp><br />

<form>
<label>Value 1:</label> <input type="text" name="val1" size="10" value= <? echo isset($_GET['val1']) ? $_GET['val1'] : '' ?> ><br />
<label>Value 1:</label> <input type="text" name="val2" size="10" value= <? echo isset($_GET['val2']) ? $_GET['val2'] : '' ?> ><br />
<label>Operation:</label> <input type="text" name="opr" size="10" value= <? echo isset($_GET['opr']) ? $_GET['opr'] : '' ?> > (accept: + - * / %) <br />
   
<input type="submit" value="Compute" name="compute" />
<br /><br />
</form>
    

<?php

if ( isset($_GET['compute']) ) {
    $val1 = $_GET['val1'];
    $val2 = $_GET['val2'];
    $opr = $_GET['opr'];

    echo '<form><input type="submit" value="Reload Page"></form>'; 

    if ( !is_numeric($val1) || !is_numeric($val2) ){
        echo "<br /> Enter numeric only";
        exit;
    }
    
    switch ($opr){
        case '+':
            echo "<br /> $val1 + $val2 = ", $val1+$val2;
            break;
        case '-':
            echo "<br /> $val1 - $val2 = ", $val1-$val2;
            break;
        case '*':
            echo "<br /> $val1 * $val2 = ", $val1*$val2;
            break;
        case '/':
            echo "<br /> $val1 / $val2 = ", $val1/$val2;
            break;
        case '%':
            echo "<br /> $val1 % $val2 = ", $val1%$val2;
        default:
            echo "wrong symbol";
    } //end switch
 
}//end if

?>

    

</body>
</html>