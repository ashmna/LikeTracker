<?php

require_once 'Image.php';



$img = new Image('./img/test1.jpg');
$img->resize(100, 100);
$img->blur(2);
$img->save('./result/test1_1.jpg');

$img = new Image('./img/test1.jpg');
$img->resize(100, 300);
$img->save('./result/test1_2.jpg');

$img = new Image('./img/test1.jpg');
$img->resize(150);
$img->blur(5);
$img->grayScale();
$img->save('./result/test1_3.jpg');



$img = new Image('./img/test2.png');
$img->resize(100, 100);
$img->blur(2);
$img->save('./result/test2_1.png');

$img = new Image('./img/test2.png');
$img->resize(100, 300);
$img->save('./result/test2_2.png');

$img = new Image('./img/test2.png');
$img->resize(150);
$img->blur(5);
$img->grayScale();
$img->save('./result/test2_3.png');







