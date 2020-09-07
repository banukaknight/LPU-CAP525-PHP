<?php


//range()
//array_pad()
//array_slice()
//array_slice()
//array_chunk()

$list1 = ["el1","el2","el3","el4","el5"];
$list2 = array_slice($list1, 1,3);

var_dump($list1);
echo "<br><br>";
var_dump($list2);