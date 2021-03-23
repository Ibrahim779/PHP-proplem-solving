<?php

/* 
 implement function input: [1,3,5,6], output: 4
*/

function findMissing(array $array)
{
    $max = max($array);
    $min = min($array);
    for ($i=$min; $i < $max ; $i++) { 
        if (!in_array($i, $array)) {
            return $i;
        }
    }
    return false;
}
 var_dump(findMissing([1,4,3,2,7,6]));