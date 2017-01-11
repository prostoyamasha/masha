<html>
<head>
<title>My First PHP Page</title>
</head>
<body>
<?php
echo "Hello World!<br />"; # коментарий оболочки unix
echo "Котики правят миром!<br />"; // вот такой вот коментарий С

/*
 * комнтарий С++
 */
$kotik = "miau"; // переменная
echo "$kotik<br />";
echo PHP_VERSION; //КОНСТАНТА
define("PI", 3.14);
echo "<br />";
echo PI;
echo "<br />";
echo defined("PI"); //поиск константы

?>
</body>
</head>