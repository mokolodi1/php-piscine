<?php

session_start();

include_once('Arena.class.php');
include_once('Scout.class.php');

# start of 'main' bit

$arena = new Arena();

$arena->addShip( new Scout(10, 10) );
$arena->addShip( new Scout(10, 50) );

print_r($arena->getTileContents(11, 50));

print_r($arena);

?>

Make the table!asdfasdf