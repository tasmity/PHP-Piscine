#!/usr/bin/php
<?php
if ($argc < 3)
{
    exit();
}
$key = $argv[1];
unset($argv[0], $argv[1]);
$argv = array_reverse($argv);
foreach ($argv as $value)
{
    $arr = explode(":",$value);
    if ($arr[0] === $key)
    {
        echo $arr[1]."\n";
        exit();
    }
}
