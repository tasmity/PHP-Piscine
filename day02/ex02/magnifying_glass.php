#!/usr/bin/php
<?php
if ($argc != 2 || !file_exists($argv[1]))
    exit();
$file = fopen($argv[1], 'r');
$new_file = "";
while ($file && !feof($file))
    $new_file .= fgetc($file);
$new_file = preg_replace_callback('/<a.*?title="(.*?)">/', function ($title){
    return (str_replace($title[1], strtoupper($title[1]), $title[0]));
}, $new_file);
$new_file = preg_replace_callback('/<a.*?>(.*?)</', function ($title) {
    return (str_replace($title[1], strtoupper($title[1]), $title[0]));
}, $new_file);
echo $new_file;

