<a href="/LPU-CAP525"><h2>GO back to LPU FOLDER</h1></a>
<h1>Welome to PHP 101. </h1>
<h4> by Banuka Vidusanka. <i>Date: 2020.08.10</i></h2>

<? 
$uid = "ABC";
$uinput = "AC";
?>

<table>
<tr>
<td>User Name is: </td>
<td>

<? if ($uid == $uinput){
	echo $uid;
}else if( strlen((string)$uinput)<strlen((string)$uid) ){
	echo "Too short";
}else if( strlen((string)$uinput)>strlen((string)$uid) ){
	echo "Too long";
}else{
	echo "inValid";
} ?>
</td>
</tr>
</table>
