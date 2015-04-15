<?php

include_once('IFighter.class.php');

class NightsWatch {

	private $watch = array();

	public function __construct() {
		$this->watch = array();
	}

	public function recruit( $person ) {
		if ( $person instanceof IFighter ) {
			array_push($this->watch, $person);
		}
	}
	
	public function fight() {
		foreach ( $this->watch as $person ) {
			$person->fight();
		}
	}
}

?>