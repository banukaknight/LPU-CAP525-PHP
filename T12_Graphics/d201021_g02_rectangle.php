<?php

$image = imagecreate(600, 400); //creates a canvas w x h

$bgcol = imagecolorallocate($image, 255, 255, 255); //white

//any colors chosen after can be used to DRAW (RGB)
$black1 = imagecolorallocate($image, 0, 0, 0); //black
$red1 = imagecolorallocate($image, 255, 0, 0);
$green1 = imagecolorallocate($image, 0, 255, 0);
$blue1 = imagecolorallocate($image, 0, 0, 255);
$white1 = imagecolorallocate($image, 255, 255, 255);
$yellow1 = imagecolorallocate($image, 255, 255, 0);
$purple1 = imagecolorallocate($image, 255, 0, 255);
$aqua1 = imagecolorallocate($image, 0, 255, 255);

//draw rectangle outline only
imagerectangle($image,50,100,350,250, $blue1); //($image, x1, y1, x2, y2, color)

//draw rectangle filled w color
imagefilledrectangle($image,150,50,200,150, $green1); //($image, x1, y1, x2, y2, color)

imagefilledrectangle($image,200,200,250,230, $aqua1); //($image, x1, y1, x2, y2, color)



header("Content-Type: image/png");

imagepng($image);