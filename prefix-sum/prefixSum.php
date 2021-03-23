<?php

function prefixSum(array $array) :array
{
    $prefixSum = [];
    $prefixSum[0] = $array[0];
    for ($i=1; $i < count($array) ; $i++) { 
        $prefixSum[$i] = $prefixSum[$i - 1] + $array[$i];
    }
    return $prefixSum;
}
