<?php

function task1 ($var1, $var2 = null)
{
    if (isset($var2)) {
        return implode ('', $var1);
    } else {
        for ($i = 0; $i <= count ($var1); $i++) {
            echo '<p>' . $var1 [$i] . '</p> </br>';
        }
    }
    
}

;
function task2 ($nums, $math)
{
    if (!is_array ($nums)) {
        return '</br>ERROR:первый аргумент не является массивом!';
    }
    for ($i = 0; $i < count ($nums); $i++) {
        if (!is_numeric ($nums[$i])) {
            return '</br>ERROR:массив чисел должен содержать только числовые значения!';
        }
    };
    
    $rez = $nums[0];
    
    for ($i = 1; $i < count ($nums); $i++) {
        
        switch ($math) {
            case '+':
                $rez = $rez + $nums[$i];
                break;
            case '-':
                $rez = $rez - $nums[$i];
                break;
            case '*':
                $rez = $rez * $nums[$i];
                break;
            case '/':
                if ($nums[$i] == 0) {
                    return '</br>ERROR:на ноль делить нельзя!';
                } else {
                    $rez = $rez / $nums[$i];
                }
                break;
            default:
                return "ERROR:Некорректный ввод арифметического знака<br/>";
        }
    }
    
    return $rez;
}

;

function task3 ()
{
    $intervals = func_get_args (); //Возвращает массив, содержащий аргументы функции
    $operation = $intervals[0];
    $rez = $intervals[1];
    for ($i = 2; $i < count ($intervals); $i++) {
        switch ($operation) {
            case '+':
                $rez = $rez + $intervals[$i];
                break;
            case '-':
                $rez = $rez - $intervals[$i];
                break;
            case '*':
                $rez = $rez * $intervals[$i];
                break;
            case '/':
                if ($intervals[$i] == 0) {
                    return '</br>ERROR:на ноль делить нельзя!';
                } else {
                    $rez = $rez / $intervals[$i];
                }
                break;
            default:
                return 'ERROR:Некорректный ввод арифметического знака<br/>';
        }
    }
    $arr = array_splice ($intervals, 1);//Удаляет часть массива и заменяет её чем-нибудь ещё
    $str = implode ($operation, $arr);// Объединяет элементы массива в строку с разделителем
    
    return $str . '=' . $rez;
    
}

function task4 ($int1, $int2)
{
    if (is_int ($int1) and is_int ($int2)) {
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

function task5 ($str)
{
    $str = mb_strtolower ($str); // приведение к нижнему регистру
    $arr1 = str_split ($str);  // разбор строки на массив
    // переворот массива символов
    for ($i = 1; $i <= count ($arr1); $i++) {
        $arr2[$i - 1] = $arr1[count ($arr1) - $i];
    }
    // функция проверка на наличие пробелов, новый массив без пробелов
    function asd ($arr)
    {
        for ($i = 0; $i < count ($arr); $i++) {
            if ($arr[$i] !== " ") {
                $newarr[$i] = $arr[$i];
            };
        };
        
        return $newarr;
    }
    
    $newarr1 = asd ($arr1);
    $newarr2 = asd ($arr2);
//сравниваем дассивы на равность
    for ($i = 0; $i < count ($newarr1); $i++) {
        if ($newarr1[$i] !== $newarr2[$i]) {
            return false;
        } else {
            return true;
        }
    }
}

function task7 ($srt)
{
    $arr = explode (' ', $srt);
    for ($i = 0; $i < count ($arr); $i++) {
        if ($arr[$i] == 'Две') {
            $arr[$i] = 'Три';
        }
    }
    $srt3 = implode (' ', $arr);
    
    return $srt3;
}

;
function output ($a)
{
    if ($a == true) {
        echo "заданое значение полиндром";
    } else {
        echo "заданое значение не является полиндром";
    }
}

function task9 ($file)
{
    $hand = fopen ($file, "r");
    $contents = fread ($hand, filesize ($file));
    fclose ($hand);
    
    return $contents;
}