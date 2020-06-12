#!/usr/bin/php
<?php
if ($argc != 2) {
    echo "Incorrect Parameters\n";
    exit();
}
$str = str_replace(" ", "",$argv[1]);
$a = intval($str);
$sign = substr(substr($str, strlen((string)$a)), 0, 1);
$b = substr(substr($str, strlen((string)$a)), 1);
if (!is_numeric($a) || !is_numeric($b))
{
    echo "Syntax Error\n";
    exit();
}
if ($sign == "+")
    echo $a + $b;
else if ($sign == "-")
    echo $a - $b;
else if ($sign == "/")
    echo $a / $b;
else if ($sign == "*")
    echo $a * $b;
else if ($sign == "%")
    echo $a % $b;
else
{
    echo "Syntax Error\n";
    exit;
}
echo "\n";

