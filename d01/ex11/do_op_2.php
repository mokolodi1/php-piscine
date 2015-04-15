#!/usr/bin/php
<?PHP

function get_current($string, $index)
{
    return substr($string, $index, 1);
}

function syntax_error()
{
    echo "Syntax Error\n";
    exit(1);
}

function is_operator($string)
{
    return ($string === "+"
            || $string === "-"
            || $string === "*"
            || $string === "/"
            || $string === "%");
}

if ($argc != 2)
{
    echo "Incorrect Parameters\n";
    exit(1);
}
$string = str_replace(' ', '', $argv[1]);
$string = str_replace("\t", '', $string);
$length = strlen($string);
$seen_first_number = false;
$seen_operator = false;
$i = 0;
if (get_current($string, $i) === "-")
{
    $i++;
}
while ($i < $length && is_numeric(get_current($string, $i)))
{
    $i++;
}
if ($i < 1 || $i == $length)
{
    syntax_error();
}

if (is_operator(get_current($string, $i)))
{
    $i++;
}
else
{
    syntax_error();
}

if (get_current($string, $i) === "-")
{
    $i++;
}
while ($i < $length && is_numeric(get_current($string, $i)))
{
    $i++;
}
if ($i != $length)
{
    syntax_error();
}
eval("echo $argv[1];");
echo "\n";
?>