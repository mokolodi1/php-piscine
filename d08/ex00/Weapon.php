<?php

class FlankLaser {

	public $charges = 0;
	public $short = 10;
//	public $medium = 20;
//	public $long = 30;
	
	private $_spray;
	private $_xcounter = 0;
	private $_start_spray_y;
	public function type($width, $position_x, $position_y) {
		while ($_xcounter < $width)
		{	
			if (arena->getTileContents($position_x, $position_y) != NULL)
				return (arena->getTileContents($position_x, $position_y));
		}
	}
}

	public function __construct($x, $y) {
		parent::__construct( array ('x' => $x
									, 'y' => $y
									, 'width' => 1
									, 'height' => 1
									, 'health' => 10
									, 'shield' => 5
									, 'pp' => 5
									, 'image_file' => 'scout.png') );
	}
	
	public function fight() {
		print ("fires gun " . PHP_EOL);
	}
	
	public function __toString() {
		return "Scout" . parent::__toString();
	}
}

?>


		$_spray = $width;
		$_start_spray_y = 0;
		while($_start_spray_y < $range) {
			$_start_spray_x = 0;
			while(!arena->getTileContents($position_x + $_start_spray_x,$position_y + $_start_spray_y)){
				if($_start_spray_x === $_spray)
				{
					$_start_spray_y++;
					$_start_spray_x = -1;