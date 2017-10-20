<?php
require('functions.php');
$a=[' строка1 ','строка2 ','строка3 ','строка4'];
$b='1';
echo 'TASK1'.'</br>';;
$rez=task1($a,$a);
echo $rez.'</br>';

echo '</br>'.'TASK2'.'</br>';
$number=array(5,2);
$r='*';
echo "Результат TASK2:".task2($number,$r);
echo '</br>';

echo '</br>'.'TASK3'.'</br>';
echo  task3('+',10,8,3).'</br>';

echo '</br>'.'TASK4'.'</br>';
echo  task4(5,7).'</br>';

echo 'TASK5'.'</br>';
$b=task5('asa');
echo output($b).'</br>'.'</br>';

echo 'TASK6'.'</br>';
echo date("m.d.Y G:i");
echo '</br>'.time();

echo '</br>'.'</br>'.'TASK7'.'</br>';
$str="Карл у Клары украл Кораллы";
echo preg_replace('![A-Z|А-Я]!u','', $str).'</br>';
$str2="Две бутылки лимонада";
$arr2=explode (' ',$str2);
for ( $i=0; $i<count ($arr2);$i++){
    if ($arr2[$i]=="Две"){
        $arr2[$i]="Три";
    }
}
$srt3=implode (' ',$arr2);
echo $srt3;


//echo '</br>'.'</br>'.'TASK8'.'</br>';
//$str4="RX packets:950381 errors:0 dropped:0 overruns:0 frame:0.";
//echo '<pre>';
//echo print_r (task8($str4));


echo '</br>'.'</br>'.'TASK9'.'</br>';

$file="test.txt";
fopen ($file,"w");
$current = "Hello, world";
file_put_contents($file, $current);
echo file_get_contents($file);

echo '</br>'.'</br>'.'TASK10'.'</br>';
$file="anothertest.txt";
fopen ($file,"w");
$current = "Hello again!";
