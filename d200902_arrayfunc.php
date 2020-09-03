<a href="./"><h2>GO back to LPU FOLDER</h2></a>

<h3> Array Func </h3>

<?
 //1 dim indexed array
$arr_4 = array( 1 => "mango", 0 => "banana");
//1 dim associative array
$arr_5 = array( "1" => "mango", "0" => "banana");

$arr_1 = array( "one", "two");
$arr_2 = array( "two", "one");
$arr_3 = array( 1 =>"two", 0=>"one");
$arr_4 = $arr_1; //copy of same arr_object

//echo "1 = 2 -- ", print_r($arr_1 == $arr_2);
echo '<br>equal operator<br>$arr_1 == $arr_2 is ------ ';
var_dump($arr_1 == $arr_2);
echo '<br>$arr_1 == $arr_3 is ------ ';
var_dump($arr_1 == $arr_3);


echo '<br>Identitiy operator<br>$arr_1 === $arr_3 is --- ';
var_dump($arr_1 === $arr_3);
echo '<br>$arr_1 === $arr_4 is ------ ';
var_dump($arr_1 === $arr_4);

//-------------
//array_flip
//unset()
//...

?>

<?
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
echo "<br>";
$key = array_search('green', $array); // $key = 2;
var_dump($key);
echo "<br>";
$key = array_search('red', $array);   // $key = 1;
var_dump($key);
echo "<br>";
?>


<span>
<?
echo "<hr> before delete: ";
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
var_dump($array);

//delete from indexed array
echo "<hr> after deletion: ";
unset($array[1]);
var_dump($array);
//--------------
echo "<hr>";
$array2 = array("col1" => 'blue', "col2" => 'red',"col3" => 'green', "col4" => 'red');

echo "<hr> before delete: ";
var_dump($array2);

//delete from associative array
unset($array2["col2"]);
echo "<hr> after delete: ";
var_dump($array2);
//--------------

echo "<hr><hr> before flip key - value: ";
$array3 = array("col1" => 'blue', "col2" => 'red',"col3" => 'green', "col4" => 'yello');
var_dump($array3);
$array3 = array_flip($array3);
echo "<hr> after flip key - value: ";
var_dump($array3);

?>

<br><br><br><br>