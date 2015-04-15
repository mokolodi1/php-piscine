<?php

class Vertex {
	
	public static $verbose = False;

	private $_x;
	private $_y;
	private $_z;
	private $_w;
	private $_color;

	public static function doc() {
		return file_get_contents("./Vertex.doc.txt");
	}

	function __construct( array $kwargs ) {
		$this->_x = $kwargs['x'];
		$this->_y = $kwargs['y'];
		$this->_z = $kwargs['z'];

		if ( isset( $kwargs['w'] ) ) {
			$this->_w = $kwargs['w'];
		} else {
			$this->_w = 1.0;
		}
		
		if ( isset( $kwargs['color'] ) ) {
			$this->_color = $kwargs['color'];
		} else {
			$this->_color = new Color( array ( 'rgb' => 0xffffff ) );
		}
		
		if ( Vertex::$verbose === True ) {
			print( $this . " constructed" . PHP_EOL);
		}
	}

	function __destruct() {
		if ( Vertex::$verbose === True ) {
			print( $this . " destructed" . PHP_EOL);
		}
	}

	function __toString() {
		$working = sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f"
						   , $this->_x, $this->_y, $this->_z, $this->_w);
		if ( Vertex::$verbose == True ) {
			$working = $working . ", " . $this->_color;
		}
		return $working . " )";
	}
}

?>