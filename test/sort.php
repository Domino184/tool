<?php

$arr = [123, 11, 1, 3, 5, 0];

$length = count($arr);

for ($i = 1; $i < $length; $i++) {
    for ($j = 0; $j < ($length - $i); $j ++) {
        if ($arr[$j] < $arr[$j + 1]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $temp;
        }
    }
}

var_dump($arr);