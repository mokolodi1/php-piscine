#!/usr/bin/php
<?php
function split_it($string)
{
    $exploded = explode(" ", $string);
    $filtered = array_filter($exploded);
    return array_slice($filtered, 0);
}

if ($argc < 2)
{
    exit(1);
}
$splitted = split_it($argv[1]);
if (count($splitted))
{
    foreach(array_splice($splitted, 1) as $element)
    {
        echo $element." ";
    }
    echo $splitted[0]."\n";
}
?>