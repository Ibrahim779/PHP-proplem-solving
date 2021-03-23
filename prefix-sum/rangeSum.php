<?php

/* 
A = [2, 5, 5, 3, 5, 2]
Q:
1- sum of A[0:4]
2- sum of A[2:5]
*/
require_once "prefixSum.php";
function rangeSum(array $array, $start, $end)
{
     $prefixSum = prefixSum($array);
     if ($start) {
         return $prefixSum[$end] - $prefixSum[$start-1];
     }
     return $prefixSum[$end];

}
var_dump(rangeSum([2, 5, 5, 3, 5, 2], 1, 4));