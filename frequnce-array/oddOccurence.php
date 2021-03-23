<?php
  
/* 
 implement function input: [1,2,2,1,3,3,5,6], output: 5
*/
function oddOccurenceFirst(array $array)
 {
     $items = [];
     $duplicat = [];
     foreach ($array as $value) {
         if (!in_array($value, $items)) {
             $items[] = $value;
         }else {
             $duplicat[] = $value;
         }
     }
     return current(array_diff($items, $duplicat));
 }
 var_dump(oddOccurenceFirst([1,2,2,1,3,3,5,6]));

 // ----------------improve-------------------
 // use frequnce array
 function oddOccurenceSecound(array $array)
 {
     $ocuruncey = [];
     foreach ($array as $value) {
        $ocuruncey[$value] = 0;
     }
     foreach ($array as $value) {
        $ocuruncey[$value]++;
     }
     var_dump($ocuruncey);
     foreach ($ocuruncey as $key => $value) {
         if ($value % 2 != 0) {
             return $key;
         }
     }
     return null;
 }
  var_dump(oddOccurenceSecound([1,2,2,1,3,3,5,6]));