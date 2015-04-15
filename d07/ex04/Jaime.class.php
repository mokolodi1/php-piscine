<?php

include_once('Tyrion.class.php');

class Jaime extends Lannister {
	function sleepWith( $otherPerson ) {
		if ( $otherPerson instanceof Tyrion ) {
			print( "Not even if I'm drunk !" . PHP_EOL );
		} else if ( $otherPerson instanceof Lannister ) {
			print( "With pleasure, but only in a tower in Winterfell, then."
				   . PHP_EOL );
		} else {
			print( "Let's do this." . PHP_EOL );
		}
	}
}

?>