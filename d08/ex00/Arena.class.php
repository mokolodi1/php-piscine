<?php

include_once('OnScreen.class.php');

class Arena {
	public $width;
	public $height;
	public $onScreens = array();

	public function __construct() {
		$this->width = 100;
		$this->height = 150;
	}

	public function addShip($ship) {
		$this->onScreens[] = $ship;
	}
	
	public function getTileContents($x, $y) {
		foreach ( $this->onScreens as $current ) {
			if ($current->isOccupying($x, $y)) {
				return $current;
			}
		}
		return null;
	}
	
	public function __toString() {
		$drawables = "";
		foreach( $this->onScreens as $current ) {
			$drawables = $drawables . " " . $current;
		}
		return sprintf("Arena[ width: %d ; height: %d ; onScreens: [%s]"
						, $this->width, $this->height, $drawables);
	}
	
	public function isInBounds($x, $y) {
		return ($x >= 0 && $x < $this->width && $y >= 0 && $y < $this->height);
	}
}

?>