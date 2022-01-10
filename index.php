<?php error_reporting(-1);
//Определить, есть ли среди элементов массива А(N) последовательность из k элементов, равных числу х.   
$A = [1, -7, -4, 9, 8, 23, 17, 22, -199, 7, 4, 3, -20, 6];
$k = 3;
$x = 14;

echo("A(n):<br>");
print_r($A);
echo("<br>Result:<br>");
$a = array_summ_k_x($A, $k, $x);
if($a){
    echo("В данном массиве есть последовательность из {$k} элементов, равных числу {$x}");
}else{
    echo("В данном массиве не обнаружено последовательность из {$k} элементов, равных числу {$x}");
}

function array_summ_k_x($array, $k, $x ){
    for ($i=0; $i < count($array); $i++){
        $res = $array[$i];
        for($n = 1; $n < $k; $n++){
            $res += $array[$i + $n];
        }
        if($res == $x){
            return true;
        }
    }
    return false;
}
