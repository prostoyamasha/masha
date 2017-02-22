<?php
/* Task-5. Есть массив [1,2,3,4,5,6,7,8,9]
 * - увеличить в массиве каждый четный элемент на 2,
 * каждый третий на 3(сделать это через (if else, if elseif, switchcase) . 
 * сделать это всеми циклами
 */

$array = array (1, 2, 3, 4, 5, 6, 7, 8, 9);
print_r ($array);
echo "</br>";
foreach ($array as &$value) {
    if ($value % 2 == 0) {
      $value = $value + 2;  
    } elseif ($value % 3 == 0) {
        $value = $value + 3;    
    } else {
        $value = $value;
    }
    }
print_r ($array);
echo "</br>";
unset ($array);
print_r ($array);

$array = array (1, 2, 3, 4, 5, 6, 7, 8, 9);
print_r ($array);
echo "</br>";
foreach ($array as &$value) {
    switch ($array){
    case $value % 2 == 0: $value = $value + 2; break; 
    case $value % 3 == 0: $value = $value + 3; break;
    default : $value = $value; break;
    }
    }
print_r ($array);



  