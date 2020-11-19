<?
echo "<pre>Q: 2 There are two multidimensional arrays of size 3x3 (Matrices). 
	a.	First matrix has values generated by random method and range of values is 13-20. 
	b.	Second matrix has values generated by random method and range of values is 50-70.
   		Write a program to display the sum of both the matrices. The sum is to be       
   		 displayed in an HTML Table with visible borders.</pre>";

// function to create a 3x3 matrix wtih random values in specified range.
function setMatrix($x,$y){
	$thisMatrix = array();
	for( $i=0; $i<3; $i++){
		$rowMatrix = array();
		for( $j=0; $j<3; $j++){
			$tempNum = rand($x,$y);
			array_push($rowMatrix, $tempNum);
		}
		array_push($thisMatrix, $rowMatrix);
	}
	return $thisMatrix;
}

function getMatrixSum($matrixx){
	$thisSum = 0;
	for( $i=0; $i<3; $i++){
		for( $j=0; $j<3; $j++){
			$tempNum = $matrixx[$i][$j];
			$thisSum += $tempNum;
		}
	}
	return $thisSum;
}

function printMatrix($matrixxx){
	foreach ($matrixxx as $rowMatrix) {
		foreach ($rowMatrix as $tempNum) {
			echo "[$tempNum] ";
		}
		echo "<br>";
	}
	echo "<br>";
}


//create 2 matrixes
$matrix1 = setMatrix(13,20);
$matrix2 = setMatrix(50,70);

//print matrixes
echo "<table width=300><tr><td>Matrix 1 <br>";
printMatrix($matrix1);
echo "</td><td>Matrix 2....... <br>";
printMatrix($matrix2);
echo "</td></tr></table>";


//calculate sum for matrix
$sum1 = getMatrixSum($matrix1);
$sum2 = getMatrixSum($matrix2);
$sumofBoth = $sum1+$sum2;

echo "<br><table border='1'><tr><th>Matrix-1 Sum</th><th>Matrix-2 Sum</th><th>Total sum of both matrixes</th></tr>";
echo "<tr><td>$sum1 </td><td>$sum2</td><td>$sumofBoth</td></tr></table><br>";


//display matrixes
print_r($matrix1);
echo "<br>";
print_r($matrix2);
echo "<br>";
?>