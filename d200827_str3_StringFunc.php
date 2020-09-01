<a href="/LPU-CAP525"><h2>GO back to LPU FOLDER</h2></a>

<h1>String Functions</h1>

<h3>Trim func - these are used to remove white spaces from a string </h3>
<ul>
<li>trim()
<li>ltrim()
<li>rtrim()
</li></li></li>
</ul>

<xmp>
<?
$var1 = "    Hello   Yoo!   ";
echo "orig:",$var1;
echo "\n";
echo "trim:",trim($var1);
echo "\n";
echo "ltrim:",ltrim($var1);
echo "\n";
echo "rtrim:",rtrim($var1);
?>
</xmp>

<h3>Change case</h3>
<ul>
	<li>strtolower($string1); - all lowercase
	<li>strtoupper($string1); - all uppercase
	<li>ucfirst($string2); - very first chat capital
	<li>ucwords($string2); - first letter of every word capital
	</li></li></li></li>
</ul>

<?
$var1 = "heLLo wOrlD yOo. wElcome!";
echo "<br>ori: ", $var1;
echo "<br>strtolower: ", strtolower($var1);
echo "<br>strtoupper: ", strtoupper($var1);
echo "<br>ucfirst: ", ucfirst($var1);
echo "<br>ucwords: ", ucwords($var1);
?>

<h3>Comparing Strings</h3>
<ul>
<li>Exact Comparison: == and === operators
<li>strcmp(string_1, string_2); - compare string & return -1,0,1
<li>strcasecmp(string_1, string_2); - compare while ignore case
<li>strncmp(string_1, string_2, len); - compare first n number of char
<li>strncasecmp(string_1, string_2, len); - compare first n number of char WHILE ignore case
<li>---------------
<li>strcmp("A","B") = -1
<li>strcmp("A","A") = 0
<li>strcmp("B","A") = 1
<li>strcmp("A","a") = -1

</li></li></li></li>
</ul>