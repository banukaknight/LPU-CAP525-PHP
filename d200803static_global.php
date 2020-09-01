<a href="./"><h2>GO back to LPU FOLDER</h1></a>
	<h1>Hello World. Welome to PHP 101</h1>
<h2> Banuka Vidusanka </h2>
<?php
if (1 == 1) {
echo "We must have it!"; 	// semicolon required here
} 					// no semicolon required here

 ?>
 
<?php
	if (2 == 2) { echo "Rhyme? And Reason? "; }
	echo "<b>Hello, world</b>" 		
	// no semicolon required before closing tag
	?>

<?php
#shell style comment
// c++ comment
/* multi
line comments */
?>

<h3>2020-08-03</h3>

<?php
echo "<pre>Literals=
A literal is a data value that appears directly in a program
Identifiers=
In PHP, identifiers are used to name variables, functions, constants, and classes.
Keywords=
A word reserved by the language for its core functionality—you cannot 
give a variable, function, class, or constant the same name as 
a keyword. Case insensitive in PHP.
</pre>";

$var1 = 5;
function f1()
{
	global $var1;
	echo "<br>In function: $var1";
	$var1 = 10;
}
echo "<br>B4 func call: $var1";
f1();
echo "<br>After func call: $var1";

function f2()
{
	static $var2 = 0;
	$var2 += 5;
	echo "<br>inside func val: $var2";
}

f2();
f2();
f2();
f2();

?>