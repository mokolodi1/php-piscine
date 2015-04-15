#!/usr/bin/php
<?php
function split_it($string)
{
    $exploded = explode(" ", $string);
    //print_r($exploded);
    $filtered = array_filter($exploded);
    return array_slice($filtered, 0);
}

if ($argc < 2)
{
    exit (1);
}

$fused = array();
$i = 1;
while ($i < $argc)
{
    $splitted = split_it($argv[$i]);
    $fused = array_merge($fused, $splitted);
    $i++;
}
asort($fused);
foreach ($fused as $element)
{
    echo $element."\n";
}
?>