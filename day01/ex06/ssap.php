#!/usr/bin/php
<?php
if ($argc > 1)
{
    $arr = array();
    unset($argv[0]);
    foreach ($argv as $value)
    {
        $tmp = array_filter(explode(' ', $value));
        foreach ($tmp as $val)
            $arr[] = $val;
    }
    sort($arr);
    foreach ($arr as $value)
        echo $value."\n";
}
