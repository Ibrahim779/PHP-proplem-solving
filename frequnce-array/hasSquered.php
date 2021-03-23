<?php
/* 
 implement function input: [1,2,3], [1,4,9], output: true
 use frequnce array 
*/
  function hasSquered(array $arr1, $arr2)
  {
      $result = []; 
      foreach ($arr2 as $value) {
          $result[$value] = 0;
      }
      foreach ($arr1 as $value) {
          $result[$value ** 2] = $value;
      }
      foreach ($result as $key => $value) {
         if(!$value){
               return false;
          }
      }
      return true;
  }
  var_dump(hasSquered([3,2,8], [4,9,5]));