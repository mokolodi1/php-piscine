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
			$this->red = intval($kwargs['red'], 10);
			$this->green = intval($kwargs['green'], 10);
			$this->blue = intval($kwargs['blue'], 10);
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

	function __toString() {
		return sprintf("Color( red: %3d, green: %3d, blue: %3d )"
					   , $this->red, $this->green, $this->blue);
	}

	private function _invalid_arguments() {
		echo "Invalid arguments" . PHP_EOL;
		exit(1);
	}

	public function add( Color $to_add ) {
		return new Color( array( 'red' => $to_add->red + $this->red
								 , 'green' => $to_add->green + $this->green
								 , 'blue' => $to_add->blue + $this->blue ) );
		return $new_color;
	}

	public function sub( Color $to_subtract ) {
		return new Color( array( 'red' => $this->red - $to_subtract->red
								 , 'green' => $this->green - $to_subtract->green
								 , 'blue' => $this->blue - $to_subtract->blue ) );
	}

	public function mult( $amount ) {
		return new Color( array( 'red' => $this->red * $amount
								 , 'green' => $this->green * $amount
								 , 'blue' => $this->blue * $amount ) );
	}
}

?>