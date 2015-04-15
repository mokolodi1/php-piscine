#!/usr/bin/php
<?PHP
if ($argc < 3)
{
    exit(1);
}
$hash_table = array();
$i = 2;
while ($i < $argc)
{
    $exploded = explode(":", $argv[$i]);
    if (isset($exploded[1]))
    {
        $hash_table[$exploded[0]] = $exploded[1];
    }
    $i++;
}
if (isset($hash_table[$argv[1]]))
{
    echo $hash_table[$argv[1]]."\n";
}
?>