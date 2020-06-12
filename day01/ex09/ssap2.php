#!/usr/bin/php
<?php
function ft_compare($str1, $str2)
{
    $map = "abcdefghijklmnopqrstuvwxyz0123456789 !\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
    $str1 = strtolower($str1);
    $str2 = strtolower($str2);
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    $i = 0;
    while ($i < $len1)
    {
        if ($i >= $len2)
            return 1;
        $postr1 = strpos($map, $str1[$i]);
        $postr2 = strpos($map, $str2[$i]);
        if ($postr1 < $postr2)
            return -1;
        else if ($postr1 > $postr2)
            return 1;
        $i++;
    }
    return 0;
}

$arg = 1;
$arr = array();
foreach ($argv as $value)
{
    if ($arg++ > 1)
    {
        $temp = preg_split("/ +/", trim($value));
        if ($temp[0] != "")
            $arr = array_merge($arr, $temp);
    }
}
usort($arr, "ft_compare");
foreach ($arr as $value)
    echo "$value"."\n";
