<?php

/**
 * Lab 4, Form and Post Lab
 *
 * This lab focuses on your understanding of arithmatic.
 *
 * @version 1.0
 * @author Ryan Bates <rbates@vtc.vsc.edu>
 * @since 20150224
 */

/**
 * Outputs to the console a truncated float.
 *
 * Takes in a floating point number and truncates in to two places of precision.
 * Then returns to the output to the console.
 *
 * @param $float_value
 */

define('GRAVITY', 9.8);

$header = <<< EOD
<html>
<head>
<title>Simple PHP Form Example</title>
</head>
<body>
EOD;

$footer = <<< EOD
</body>
</html>
EOD;

$form_layout = <<< EOD
<p>
<form method="post" action="">
<label name="truncateFloat">Floating Point Value</label><input type="text" name="truncateFloat"><br>
<label name="farenheit2Kelvin">Farenheit Value</label><input type="text" name="farenheit2Kelvin"><br>
<label name="dodecahedronVolume">Dodecahedron Side Value</label><input type="text" name="dodecahedronVolume"><br>
<label name="impactVelocity">Impact Velocity</label><input type="text" name="impactVelocity"><br>
<input type="submit" value="submit" name="submit">
</form>
EOD;

function truncateFloat($float_value)
{
	$truncate = (int)($float_value*100)/100;
	return $truncate;
}

/**
 * @param $degrees_f
 */
function farenheit2Kelvin($degrees_f)
{
	$degrees_k = ($degrees_f - 32) * 5/9 + 273.15;
	return $degrees_k;
}

/**
 * @param $area
 */
function dodecahedronVolume($area)
{
	$volume = ((15 + 7*sqrt(5)) / 4)*pow($area,3);
	return $volume;
}

/**
 * @param $height
 */
function impactVelocity($height)
{
	$velocity = sqrt(2*GRAVITY*$height);
	return $velocity;
}

if (isset($_POST['submit'])) {
	$truncateFloatResult = truncateFloat($_POST["truncateFloat"]);
	$farenheit2KelvinResult = farenheit2Kelvin($_POST["farenheit2Kelvin"]);
	$dodecahedronVolumeResult = dodecahedronVolume($_POST["dodecahedronVolume"]);
	$impactVelocityResult = impactVelocity($_POST["impactVelocity"]);
} else {
	$truncateFloatResults = "";
	$farenheit2KelvinResults = "";
	$dodecahedronVolumeResults = "";
	$impactVelocityResults = "";
}

if (!isset($_POST['submit'])) {
	echo $form_layout;
} else {
	$form_results = $header;
	if (!empty($truncateFloatResult)) {
		$form_results .= "The truncate floating point value is: " . $truncateFloatResult . ".<br>";
	}
	if (!empty($farenheit2KelvinResult)) {
		$form_results .= "The kelvin value is: " . $farenheit2KelvinResult . ".<br>";
	}
	if (!empty($dodecahedronVolumeResult)) {
		$form_results .= "The dodecahedron value value is: " . $dodecahedronVolumeResult . ".<br>";
	}
	if (!empty($impactVelocityResult)) {
		$form_results .= "The splat value is: " . $impactVelocityResult . ".<br>";
	}
	$form_results .= $footer;
	
	echo $form_results;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Class 4 Lab</title>
</head>
<body>

</body>
</html>
