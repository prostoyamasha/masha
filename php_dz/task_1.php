<head>
<title>PHP-dz</title>
</head>
<body>
<?php

/*Создать переменные $age и $name. Засетить туда свой возраст
 * и имя соответственно. Создать третью переменную $data в которую
 * поместить строку - "Меня зовут Маша мне 29 годиков".
 * Имя и возраст подставить из переменных. Сделать это с конкатенацией 
 * и без нее. 
 */

$name = Маша;
$age = 29;
$dataWithConcatenation = "Меня зовут $name мне $age годиков.";
$dataWithoutConcatenation = "Меня зовут " . $name . " мне " . $age . " годиков.";

echo $dataWithConcatenation . "<br />" . $dataWithoutConcatenation;

?>
</body>
