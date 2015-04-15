#!/usr/bin/php
<?php

$handle = fopen("php://stdin","r");
while (1)
{
    echo "Entrez un nombre: ";
    $gotten = fgets($handle);
    if ($gotten == FALSE)
    {
        echo "\n";
        break;
    }
    $line = substr($gotten, 0, -1);
    if (strlen($line) > 0 && is_numeric($line))
    {
        echo "Le chiffre ".$line." est ";
        if ((int)substr($line, -1) % 2)
        {
            echo "Impair";
        }
        else
        {
            echo "Pair";
        }
    }
    else
    {
        echo "'$line' n'est pas un chiffre";
    }
    echo "\n";
}
?>