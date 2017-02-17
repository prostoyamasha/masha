<?php
/*Task-3: исходный массив 
 * $array = ['w' => 44, 'a' => 78, 'h' => 45,'c' => 67,'b' => 4]
 * - отсортировать массив по ключу
 */

$array = array ('w' => 44, 'a' => 78, 'h' => 45,'c' => 67,'b' => 4);
ksort ($array);
print_r ($array);
echo "<br/>";

krsort ($array);
print_r ($array);
echo "<hr/>";

//- отсортировать массив по значению (с сохранением ключей);

asort ($array);
print_r ($array);
echo "<br/>";
arsort ($array);
print_r ($array);
echo "<hr/>";

//- проверить, есть ли в массиве ключ 'f';

if (array_key_exists ('f', $array)) { //Сначала я написала, то вариант,
    echo "В массиве есть ключ 'f'";   //что ниже (просто с пустой строкой)
} else {                              // но потом мне показалось, что 
    echo "В массиве нет ключа 'f'";   // так логичнее..
}
echo "<hr/>";
echo array_key_exists ('f', $array) . "<hr/>";

//- проверить, есть ли в массиве значение '56';

if (in_array (56, $array)) {
    echo "В массиве есть значение '56'";
} else {
    echo "В массиве нет значения '56'";
}
echo "<hr/>";
echo in_array (56, $array);
echo "<hr/>";

/*- разбить массив на кусочки по два элемента. на выходе получиться 
 * двумерный массив. тоесть массив состоящий из массивов 
 * по два элемента в каждом.
 */ 

print_r (array_chunk ($array, 2));
echo "<hr/>";

//- обрезать массив. оставить в нем первые три элемента;

print_r (array_slice ($array, 0, 3));
echo "<hr/>";

//- перевернуть массив местами;

print_r (array_reverse ($array));
echo "<hr/>";

//- посчитать количество элементов в массиве:

echo "Число элементов массива: " . count($array) . "<hr/>";
 
//- проверить, не пустой ли массив;

if (count ($array) > 0) {
    echo 'массив не пустой' . "<hr/>";   
}

//- вывести на экран элемент по ключу 'w';

echo $array ['w'];
echo "<hr/>";

//- присвоить значение '123' элементу с ключом 'a';

$array ['a'] = 123;
print_r ($array);
echo "<hr/>";

//- добавить в массив новый элемент с ключом 'f' и значением 55;

$array ['f'] = 55;
print_r ($array);
echo "<hr/>";

/*- добавить новое значение в эелемент. ключ мы не присваиваем, только значение.
 * вывести на экран и посмотреть какой будет ключ нового элемента.
 */

array_push ($array, 358);
print_r ($array);
echo "<hr/>";

//- поместить в переменную первый элемент массива как будто мы не знаем ключ;

list($firstElement, , , , , , ) = $array;
echo $firstElement;
echo "<hr/>";

//- дан массив [1,1,23,45] - убрать из массива повторяющеися значения;

$arrayNext = array (1, 1, 23, 45);
$arrayResult = array_unique ($arrayNext);
print_r ($arrayResult);