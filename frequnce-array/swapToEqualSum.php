<?php
/*
A = [3,4,7,8]
B = [1,2,2,5]
can we swap elements in A with elements in B 
such that the sum of elements in two arrays are equal?
Notes: 
time complexity in O(n)
=> use frequnce array
*/
function swapToEqualSum(array $arr1, array $arr2)
{
    $counting = [];
    $max = max(max($arr1), max($arr2));
    $min = min(min($arr1), min($arr2));
    $sub = abs(array_sum($arr1) - array_sum($arr2)) / 2;

    if (!is_integer($sub)) {
        return false;
    }

    for ($i=$min; $i <= $max ; $i++) { 
        $counting[$i] = 0;
    }

    foreach ($arr1 as $value) {
        $counting[$value]++;
    }

    foreach ($arr2 as $value) {
        if ($counting[$value + $sub] ?? $counting[$value - $sub]) {
             return true;
        }
    }
    return false;

}
var_dump(swapToEqualSum([3,4,7,8],[1,2,2,5]));