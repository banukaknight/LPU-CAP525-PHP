<a href="/LPU-CAP525"><h2>GO back to LPU FOLDER</h1></a>
	<h1>Hello World. Welome to PHP 101</h1>
<h2> if else stuff </h2>
<?php


$val1 = "10";
$val2 = 10;

echo "<br>--compare--<br>";
echo (int)($val1 == $val2) ."___ $val1 == $val2<br>"; //TRUE
echo (int)($val1 === $val2) ."___ $val1 === $val2<br>"; //FALSE

echo "<br>--line13--<br>";
$var1 = 5;
echo "incrementing var1++". $var1++;
echo "<br>val now: ".$var1;

echo "<br>--------<br>";

$var2 = 5;
echo "incrementing ++var1: ".++$var2;
echo "<br>val now ". $var2;

echo "<br>--------<br>";

$age = 31;
if (($age >= 18 ) && ($age < 60) )
	echo "Allowed to donate blod";
else
	echo "Not allowed to donate blood";

echo "<br>--------<br>";
if (($age <= 18 ) || ($age > 60) )
	echo "Not Allowed to donate blod";
else
	echo "Allowed to donate blood";

echo "<br>--------<br>";

// attendence > 80 or cgpa > 7

$att = 60;
$cgpa = 8;

echo ($att>80) || ($cgpa>7) ? "register":"don't register" ;

echo "<br>--------<br>";
$val6 = 4;
$val7 = 5.76;

echo "<h4> Sum: ". ($val6 + $val7);
echo "<h4> Sum: ". (int)($val6 + $val7);

echo "<h4> type: ". gettype($val7);

echo "<br>--------<br>";


$b = true;
echo "<br>--------<br>";
echo "<h4> type: ".gettype($b). $b;

$copyb = (int)$b;
echo "<h4> type: ".gettype($copyb) . $copyb;

$copyb2 = (string)$b;
echo "<h4> type: ".gettype($copyb2) . $copyb2;






?>