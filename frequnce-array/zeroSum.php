<?php
/* 
 implement function input: [-3,2,4,-3,-2], output: [-3,3]
*/
function zeroSum(array $array)
  {
        $i = 0;
        if($i == count($array)){
            return null;
        }
        $selected = $array[$i];

        foreach ($array as  $value) {
            if ($selected + $value == 0) {
                return [$selected, $value];
            }
        }
        $i++;
  }
  var_dump(zeroSum([-3,2,4,-3,-2]));
// -----------------------improve----------------------------
// use frequnce array
  function sumToZero(array $array)
  {
      $result = [];
      foreach ($array as $value) {
          $result[$value] = 0;
      }
      foreach ($array as $value) {
         $result[-$value] = $value;  
      }
      foreach ($result as $key => $value) {
          if ($value) {
              if ($key == $array[count($array)-1]) {
                  return [$key, $value];
              }
          }
      }
      return null;
  }
  var_dump(sumToZero([1,3,2,4,3,2,1,-3]));