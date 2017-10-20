<?php

function task1($var1, $var2 = null)
{
    if (isset($var2)) {
        return implode('', $var1);
    } else {
        for ($i = 0; $i <= count($var1); $i++) {
            echo '<p>' . $var1 [$i] . '</p> </br>';
        }
    }

}

;
function task2($nums,$math){
    
    for($i=0; $i<count ($nums);$i++){
        if(!is_integer ($nums[$i])){
            return 'ERROR:массив чисел должен содержать только числовые значения!';
        }
    };
    
//    if($math!=='-' or $math!=='+' or $math!=='*' or $math!=='/'){
//        return "ERROR:не верный второй аргумент, допустимые значения: +,-,*,/ ";
//    };
//    с этим куском не работает, почему не пойму!
    
    $rez = $nums[0];
    
    for ($i=1; $i<count ($nums);$i++){
        
        switch($math){
            case '+': $rez =$rez+$nums[$i]; break;
            case '-': $rez =$rez-$nums[$i]; break;
            case '*': $rez =$rez*$nums[$i]; break;
            case '/': $rez =$rez/$nums[$i]; break;
        }
    }
    return $rez;
};

//function task2($arr, $strsymbol)
//{
//    $error = array('ошибка - в символе', 'ошибка - не число');
//if($strsymbol !== "-" || $strsymbol !== "+" || $strsymbol !== "*" || $strsymbol !== "/"){
//    return $error[0];
//    }
//
//
////    if ($strsymbol == "-" || $strsymbol == "+" || $strsymbol == "*" || $strsymbol == "/") {
////     if(is_int($arr[0]) or is_float($arr[0])){
////         $rez=$arr[0];
////     } else{
////         echo $error[1] . '</br>';
////     }
////        for ($i = 0; $i < count($arr); $i++) {
////            if (is_int($arr[$i]) or is_float($arr[$i])) {
////                switch ($strsymbol) {
////                    case "-":
////                        $rez = $rez - $arr[$i];
////                        break;
////                    case "+":
////                        $rez = $rez + $arr[$i];
////                        break;
////                    case "*":
////                        $rez = $rez * $arr[$i];
////                        break;
////                    case "/":
////                        $rez = $rez / $arr[$i];
////                        break;
////                }
////
////            } else {
////                echo $error[1] . '</br>';
////            }
////        }
////
////    } else {
////        echo $error[0];
////    }
//    return $rez;
//}

;

function task3($str, ...$intervals)
{
    $rez = 0;
    for ($i = 0; $i < count($intervals); $i++) {

        $rez = $intervals[$i] + $rez;

    }
    $str2 = implode($str, $intervals);

    return $str2 . '=' . $rez;

}

function task4($int1, $int2)
{
    if (is_int($int1) and is_int($int2)) {
        echo "<table>";
        for ($i = 1; $i < $int1; $i++) {
            echo "<tr>";
            for ($j = 1; $j < $int2; $j++) {
                echo "<td>" . $i * $j . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "error!!!! - ошибка при введении значения!";
    }
}

function task5($str)
{
    $str = mb_strtolower($str); // приведение к нижнему регистру
    $arr1 = str_split($str);  // разбор строки на массив
    // переворот массива символов
    for ($i = 1; $i <= count($arr1); $i++) {
        $arr2[$i - 1] = $arr1[count($arr1) - $i];
    }
    // функция проверка на наличие пробелов, новый массив без пробелов
    function asd($arr)
    {
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] !== " ") {
                $newarr[$i] = $arr[$i];
            };
        };
        return $newarr;
    }

    $newarr1 = asd($arr1);
    $newarr2 = asd($arr2);
//сравниваем дассивы на равность
    for ($i = 0; $i < count($newarr1); $i++) {
        if ($newarr1[$i] !== $newarr2[$i]) {
            return false;
        } else {
            return true;
        }
    }
}

;
function output($a)
{
    if ($a == true) {
        echo "заданое значение полиндром";
    } else {
        echo "заданое значение не является полиндром";
    }
}

//function task8($str){
//    $pattern ='/[0-9]/';
//    $arr=preg_grep ($pattern,explode (":",$str);
//    return $arr;
//}