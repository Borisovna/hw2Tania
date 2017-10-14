<?php
require('functions.php');
$a=[' строка1 ','строка2 ','строка3 ','строка4'];
$b='1';
echo 'TASK1'.'</br>';;
$rez=task1($a,$a);
echo $rez.'</br>';

//echo 'TASK2'.'</br>';
//$number=array(8, 2);
//echo task2($number,"-");
//echo '</br>';

echo 'TASK3'.'</br>';
echo  task3('+',10,8,3).'</br>';

echo 'TASK4'.'</br>';
echo  task4(5,7).'</br>';

echo 'TASK5'.'</br>';
$b=task5('Фsa');
echo output($b);
