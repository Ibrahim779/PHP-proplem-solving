<?php
/* 
 implement function makes same as array_merge()
*/
function arrayMerge(array $arr1, array $arr2) :array
{
    $resault = [];
    foreach ($arr1 as $key => $value) {
        $resault[$key] = $value;
    }
    foreach ($arr2 as $key => $value) {
        $resault[$key] = $value;
    }
    return $resault;
}

var_dump(arrayMerge(['a'],['b']));