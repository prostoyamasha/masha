<?php
$a = 0;
$b = '0';
$c = '0.00';
$d = 0.00;
$e = '';
$f = null;
$g = 'null';
$h = 'a0';
$j = 'a' . 0;
$k = '0a';
$l = 0 . 'a';
$z = 5;
$i = '5';
$x = '1';
$q = 'string';
$v = false;
$n = true;
$s = 'false';
$w = 'true';
//$r = [];
$t = '    ';

echo $a > $b; // выведет false - пустую строку;
echo "</br>";
echo $z > $i; // выведет false - пустую строку;
echo "</br>";
echo $b > $r; // выведет true - еденицу, т.к. $b-строковая (еденица). а $r
              // просто пустое место;
echo "</br>";
echo $g > $f; //выведет true - еденицу, т.к. $g-строковая переменная
              // и значит она есть и это еденица, а $f- нуль..
echo "</br>";
echo $k > $j; // выведет false - пустую строку;
echo "</br>";

echo $a / $b; //выдает ошибку, т.к. на ноль делить нелья....?
echo "</br>";
echo $a * $b; // выдает 0
echo "</br>";
echo $z / $i; // відает ответ 1;
echo "</br>";
echo $z * $i; // выдает ответ 25;
echo "</br>";
echo $r / $z; // відает ответ 0;
echo "</br>";

echo $z == $i; // выведет true - еденицу;
echo "</br>";
echo $a == $b; // выведет true - еденицу;
echo "</br>";
echo $a == $c; // выведет true - еденицу;
echo "</br>";
echo $a == $f; // выведет true - еденицу;
echo "</br>";
echo $a == $g; // выведет true - еденицу;
echo "</br>";
echo $a == $v; // выведет true - еденицу;
echo "</br>";
echo $a == $s; // выведет true - еденицу;
echo "</br>";
echo $a == $r; // выведет true - еденицу;
echo "</br>";
echo $a == $t; // выведет true - еденицу;
echo "</br>";
echo $a == $e; // выведет true - еденицу;
echo "</br>";
echo $c == $f; // выведет false - ничего;
echo "</br>";
echo $c == $g; // выведет false - ничего;
echo "</br>";

echo $c == $v; // выведет false - ничего;
echo "</br>";
echo $c == $s; // выведет false - ничего;
echo "</br>";
echo $c == $r; // выведет false - ничего;
echo "</br>";
echo $c == $t; // выведет false - ничего;
echo "</br>";
echo $c == $e; // выведет false - ничего;
echo "</br>";
echo $s == $v; // выведет false - ничего;
echo "</br>";

echo $v === $a; // выведет false - ничего;
echo "</br>";
echo $v === $r; // выведет false - ничего;
echo "</br>";
echo $v === null; // выведет false - ничего;? - почему? ведь и то и то булево..
echo "</br>";
echo $a === $d; // выведет false - ничего;
echo "</br>";
echo $a === $b; // выведет false - ничего;
echo "</br>";
echo $z === $i; // выведет false - ничего;
echo "</br>";

echo $a + $b; // выведет ответ 0;
echo "</br>";
echo $l + $j; // выведет ответ 0;
echo "</br>";
echo $h + $k; // выведет ответ 0;
echo "</br>";
echo $z + $i; // выведет ответ 10;
echo "</br>";

echo $a - $b; // выведет ответ 0;
echo "</br>";
echo $z - $i; // выведет ответ 0;
echo "</br>";

echo $a . $b; // выведет ответ 00;
echo "</br>";
echo $z . $i; // выведет ответ 55;
echo "</br>";
echo $c . $d; // выведет ответ 0.000;? почему не 0.000.00?
echo "</br>";
echo $f . $g; // выведет ответ null;
echo "</br>";
echo $s . $r; // выведет ответ false;