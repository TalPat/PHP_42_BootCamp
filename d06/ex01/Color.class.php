<?php

	Class Color {
		public $red, $green, $blue = 0;
		static $verbose = FALSE;

		public function __construct(array $color) {
			if (array_key_exists('rgb', $color)) {
				$this->red = intval($color[rgb] / 256 / 256);
				$this->green = intval($color[rgb] / 256 % 256);
				$this->blue = intval($color[rgb] % 256);
			}
			else {
				if (array_key_exists('red', $color))
					$this->red = intval($color[red]);
				if (array_key_exists('green', $color))
					$this->green = intval($color[green]);
				if (array_key_exists('blue', $color))
					$this->blue = intval($color[blue]);
			}
			if (self::$verbose)
				printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green,$this->blue);			
		}

		public function __destruct() {
			if (self::$verbose)
				printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
		}

		public function __toString() {
			return (sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue));
		}

		public static function doc() {
			echo(file_get_contents("Color.doc.txt"));
		}

		public function add($newcol) {
			return (new Color(array('red' => $this->red + $newcol->red, 'green' => $this->green + $newcol->green, 'blue' => $this->blue + $newcol->blue)));
		}

		public function sub($newcol) {
			return (new Color(array('red' => $this->red - $newcol->red, 'green' => $this->green - $newcol->green, 'blue' => $this->blue - $newcol->blue)));
		}

		public function mult($newcol) {
			return (new Color(array('red' => $this->red * $newcol, 'green' => $this->green * $newcol, 'blue' => $this->blue * $newcol)));
		}

	}
?>
