<?php

	require_once 'Color.class.php';

	Class Vertex {
		private $_x, $_y, $_z = 0;
		private $_w = 1.0;
		private $_color;
		static $verbose = FALSE;

		public function __construct($vtx) {
			$this->_x = $vtx['x'];
			$this->_y = $vtx['y'];
			$this->_z = $vtx['z'];
			if (array_key_exists('w', $vtx)) {
				$this->_w = $vtx['w'];
			}
			else {
				$this->_w = 1.00;
			}
			if (array_key_exists('color', $vtx)) {
				$this->_color = $vtx['color'];
			}
			else {
				$this->_color = new Color(array('rgb' => 0xffffff));
			}
			if (self::$verbose)
				printf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, %s ) constructed\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color);
		}

		public function __destruct() {
			if (self::$verbose)
				printf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, %s ) destructed\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color);
		}

		public function __toString() {
			$str = sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f", $this->_x, $this->_y, $this->_z, $this->_w);
			if (self::$verbose)
				$str = $str.", ".sprintf("%s", $this->_color)." )";
			else
				$str = $str." )";
			return ($str);
		}

		public function getX() {return ($this->_x);}
		public function getY() {return ($this->_y);}
		public function getZ() {return ($this->_z);}
		public function getW() {return ($this->_w);}
		public function getColor() {return ($this->_color);}

		public function setX($v) {$this->_x = $v;}
		public function setY($v) {$this->_y = $v;}
		public function setZ($v) {$this->_z = $v;}
		public function setW($v) {$this->_w = $v;}
		public function setColor($v) {$this->_color = $v;}

		public static function doc() {
			echo(file_get_contents("Vertex.doc.txt"));
		}

	}
?>
