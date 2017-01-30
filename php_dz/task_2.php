<head>
<title>PHP-dz</title>
</head>
<body>
<?php

/*Task-2: есть строка "   Харьков, Львов, Днепропетровск "
 * - удалить пробелы в начале и в конце этой строки
 * - разбить эту строку в массив. разделителем будет запятая.
 */

$stringFirst = "   Харьков, Львов, Днепропетровск ";
echo trim($stringFirst);
$stringPieces = explode(",", $stringFirst);
echo '<br>';
echo $stringPieces[0];
echo $stringPieces[1];
echo $stringPieces[2];
echo '<hr>';

 /* есть массив ['Харьков','Львов','Днепропетровск']
 * - сделать из этого массива строку. слова чтобы шли в строке через
 * запятую
 */

$arrayFirst = array('Харьков','Львов','Днепропетровск');
$separatedPieces = implode(", ", $arrayFirst);
echo $separatedPieces;
echo '<hr>';

/* есть строка "067-123-45-67"
 * - заменить в строке 067 на 095
 */

$stringSecond = "067-123-45-67";
echo $stringSecond . '<br>';
$stringThird = str_replace('067', '095', $stringSecond);
echo $stringThird . '<hr>';

 /* есть строка "<!DOCTYPE
 * html><html><head><script>window
 * .getYourPrivateBrowserCoockiesDataAndSendToBadGuys();<script></head>
 * <body>Site Content</body></html>"
 * - удалить из нее теги
 */

$stringFourth = "<!DOCTYPE html><html><head><script>window
    .getYourPrivateBrowserCoockiesDataAndSendToBadGuys();<script></head>
    <body>Site Content</body></html>";
echo strip_tags($stringFourth) . '<hr>';

 /* есть строка "Random string"
 * - посчитать количество символов в ней
 * - перевернуть ее задом наперед
 */

$strigFifth = "Random string";
echo strlen($strigFifth) . '<br>';
echo strrev($strigFifth) . '<hr>';

 /* есть строка 'hello world'
 * - сделать первую букву в верхнем регистре
 * - сделать первые буквы всех слов в верхнем регистре
 * - Сделать всю строку в верхнем регистре
 * - сделать всю строку в нижнем регистре
 */ 

$stringSix = 'hello world';
echo ucfirst($stringSix) . '<br>';
echo ucwords($stringSix) . '<br>';
echo strtoupper($stringSix) . '<br>';
echo strtolower($stringSix) . '<hr>';

 /* творческое задание! есть строка "some random text 'Hello, PHP
 * progrаmmer!' some random text" тут могут помочь фунуции strpos, substr, trim
 * - вырезать из нее все то что до одинарных кавычек и все что после
 * чтобы осталось только Hello, PHP progrаmmer! (без одинарных кавычек)
 */

$stringSeven = "some random text 'Hello, PHP progrаmmer!' some random text";
echo substr($stringSeven, 18, 23) . '<br>';
$findString = strpbrk($stringSeven, 'H');
echo substr($findString, 0, 23). '<hr>';

?>
</body>
