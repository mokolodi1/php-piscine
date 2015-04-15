#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	echo  preg_replace('/\s+/', ' ', trim($argv[1])) ."\n";
}
?>