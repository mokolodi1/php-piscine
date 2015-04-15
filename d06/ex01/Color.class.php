<?php

class Color {

	public static $verbose = False;

	public $red;
	public $green;
	public $blue;

	public static function doc() {
		return file_get_contents("./Color.doc.txt");
	}

	function __construct( array $kwargs ) {
		if ( isset( $kwargs['rgb'] ) ) {
			$this->red = $kwargs['rgb']>>16;
			$this->green = $kwargs['rgb']>>8&255;
			$this->blue = $kwargs['rgb']&255;
		}
		else if ( isset($kwargs['red'] )
				 && isset($kwargs['green'] )
				 && isset($kwargs['blue']) ) {
			$this->red = $kwargs['red'];
			$this->green = $kwargs['green'];
			$this->blue = $kwargs['blue'];
		}
		else {
			invalid_arguments();
		}
		
		if ( Color::$verbose === True ) {
			print( $this . " constructed." . PHP_EOL);
		}
		return;
	}

	function __destruct() {
		if ( Color::$verbose === True ) {
			print( $this . " destructed." . PHP_EOL);
		}
	}

	function __clone() {
		if ( Color::$verbose === True ) {
			print( $this . " constructed." . PHP_EOL);
		}
	}

	function __toString() {
		return sprintf("Color( red: %3d, green: %3d, blue: %3d )"
					   , $this->red, $this->green, $this->blue);
	}

	private function _invalid_arguments() {
		echo "Invalid arguments" . PHP_EOL;
		exit(1);
	}

	public function add( Color $to_add ) {
		$new_color = clone $this;
		$new_color->red += $to_add->red;
		$new_color->green += $to_add->green;
		$new_color->blue += $to_add->blue;
		return $new_color;
	}

	public function sub( Color $to_subtract ) {
		$new_color = clone $this;
		$new_color->red -= $to_subtract->red;
		$new_color->green -= $to_subtract->green;
		$new_color->blue -= $to_subtract->blue;
		return $new_color;
	}

	public function mult( $amount ) {
		$new_color = clone $this;
		$new_color->red *= $amount;
		$new_color->green *= $amount;
		$new_color->blue *= $amount;
		return $new_color;
	}
}

?>