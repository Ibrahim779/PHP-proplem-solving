<?php
/*
Q:
Array = [0, 0, 4, 2, 0, 1]
How many times did 4 apper in Array ?
How many times did 1 apper in Array ?
A:
i will use frequnce(count) array 
1- create counting array 
2- index of counting array = the values in array 
and values in counting array = 0
3- increment by 1 if the number exist

*/
function occurenceCount(array $array, int $number)
{
    $counting = [];

    foreach ($array as $value) {
        $counting[$value] = 0;
    }
    foreach ($array as $value) {
        $counting[$value]++;
    }
    return $counting[$number];
}
var_dump(occurenceCount([0,0,4,2,0,1], 1));