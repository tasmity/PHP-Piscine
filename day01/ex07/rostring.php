#!/usr/bin/php
<?php
if ($argc > 1)
{
    $str = array_filter(explode(" ", trim($argv[1])), "strlen");
    $str = array_merge($str);
    $len = count($str);
    $vol = 1;
    while ($vol < $len)
    {
        echo $str[$vol]." ";
        $vol += 1;
    }
    echo $str[0]."\n";
}
