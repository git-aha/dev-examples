<?php
/*
To find the volume (centimeters cubed) of a cuboid you use the formula:
volume = Length * Width * Height

But someone forgot to use proper record keeping, so we only have the volume, and the length of a single side!
It's up to you to find out whether the cuboid has equal sides (= is a cube).
Return true if the cuboid could have equal sides, return false otherwise.
Return false for invalid numbers too (e.g volume or side is less than or equal to 0).
Note: the sides must be integers
*/
?>

<?php
	function cubeChecker($volume, $side) {
		$sum = pow($side, 3);
		echo $volume . ' == ';
		echo $sum . ' ?<br />';

		if ($volume <= 0 || $side <= 0) {
			echo ' - invalid number <br />';
			return false;
			echo '<hr /> nothing else happens <hr />';
		}

		if ($sum == $volume) {
			echo ' - all sides are equal <br />';
			return true;
		} else {
			echo ' - sides are not equal <br />';
			return false;
		}

	  // return $true_false;
	}
// testing with examples
	cubeChecker(20, 4);
	cubeChecker(27, 3);
	cubeChecker(9, 3);
	cubeChecker(0, 7);
	cubeChecker(12, 0);
	cubeChecker(512, 8);
	cubeChecker(512, -4);
?>
