<?php
/* 
 implement function makes same as array_combine()
*/
 function arrayCombine(array $keys, array $values) :array
{
    $resault = []; 
    if (count($keys) != count($values)) {
        return false;
    }

    if (empty($keys)) {
        return false;
    }

    foreach ($keys as $key => $value) {
        $resault[$value] = $values[$key];
    }
    
    return $resault;
}

var_dump(arrayCombine(['name'], ['ali']));