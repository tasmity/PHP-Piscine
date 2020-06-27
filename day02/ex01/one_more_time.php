#!/usr/bin/php
<?php
date_default_timezone_set('Europe/Paris');
$month = array(
    1 => "janvier",
    2 => "fevrier",
    3 => "mars",
    4 => "avril",
    5 => "mai",
    6 => "juin",
    7 => "juillet",
    8 => "aout",
    9 => "septembre",
    10 => "octobre",
    11 => "novembre",
    12 => "decembre");

$week = array(
    1 => "lundi",
    2 => "mardi",
    3 => "mercredi",
    4 => "jeudi",
    5 => "vendredi",
    6 => "samedi",
    7 => "dimanche");

    if ($argc != 2)
        exit();
    $str = strtolower($argv[1]);
    $date = explode(" ", $str);
    $time = explode(":", $date[4]);
    if (count($date) != 5)
    {
        echo "Wrong Format\n";
        exit();
    }
    if ((int)$time[0] < 0 || (int)$time[0] > 23 || (int)$time[1] < 0 || (int)$time[1] > 59 || (int)$time[2] < 0 ||
        (int)$time[2] > 59)
    {
        echo "Wrong Format\n";
        exit();
    }
    if (preg_match("/^(0[1-9]|[1-9]|[12]\d|3[01])$/", $date[1]) === 0)
    {
        echo "Wrong Format\n";
        exit();
    }
    $date[0] = array_search($date[0], $week);
    $date[2] = array_search($date[2], $month);
    If ((int)$date[0] < 1 || (int)$date[0] > 7 || (int)$date[2] < 1 || (int)$date[2] > 12)
    {
        echo "Wrong Format\n";
        exit();
    }
    $sec = mktime((int)$time[0], (int)$time[1], (int)$time[2], (int)$date[2], (int)$date[1], (int)$date[3]);
    if (date("N", $sec) == $date[0])
        echo $sec."\n";
    else
        echo "Wrong Format\n";
