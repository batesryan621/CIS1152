<?php
/**
<<<<<<< HEAD
 * Lab 4, Form and Post Lab
=======
 * Lab 2, Arithmatic Lab
>>>>>>> upstream/master
 *
 * This lab focuses on your understanding of arithmatic.
 *
 * @version 1.0
<<<<<<< HEAD
 * @author Ryan Bates <rbates@vtc.vsc.edu>
 * @since 20150224
=======
 * @author YOUR_NAME <YOUR_EMAIL_ADDRESS@vtc.edu>
 * @since 20150120
>>>>>>> upstream/master
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
<<<<<<< HEAD
=======

>>>>>>> 92a4458807f564be632d133b55f7e03d0fe9545a
<<<<<<< HEAD
$header = <<< EOD
<html>
<head>
<title>Simple PHP Form Example</title>
</head>
<body>
EOD;
<<<<<<< HEAD
=======

>>>>>>> 92a4458807f564be632d133b55f7e03d0fe9545a
$footer = <<< EOD
</body>
</html>
EOD;
<<<<<<< HEAD
=======

>>>>>>> 92a4458807f564be632d133b55f7e03d0fe9545a
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
<<<<<<< HEAD
=======

>>>>>>> 92a4458807f564be632d133b55f7e03d0fe9545a
function truncateFloat($float_value)
{
	$truncate = (int)($float_value*100)/100;
	return $truncate;
=======
function truncateFloat($float_value)
{
    echo (int) floatval($float_value * 100) / 100;
>>>>>>> upstream/master
}
/**
 * @param $degrees_f
 */
function farenheit2Kelvin($degrees_f)
{
<<<<<<< HEAD
	$degrees_k = ($degrees_f - 32) * 5/9 + 273.15;
	return $degrees_k;
=======
    echo ($degrees_f - 32) * 5 / 9 + 273.15;
>>>>>>> upstream/master
}
/**
 * @param $area
 */
function dodecahedronVolume($area)
{
<<<<<<< HEAD
	$volume = ((15 + 7*sqrt(5)) / 4)*pow($area,3);
	return $volume;
=======
    echo pow($area, 3) / 4 * (15 + 7 * sqrt(5));
>>>>>>> upstream/master
}
/**
 * @param $height
 */
function impactVelocity($height)
{
<<<<<<< HEAD
	$velocity = sqrt(2*GRAVITY*$height);
	return $velocity;
}
<<<<<<< HEAD
=======

>>>>>>> 92a4458807f564be632d133b55f7e03d0fe9545a
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
<<<<<<< HEAD
=======

>>>>>>> 92a4458807f564be632d133b55f7e03d0fe9545a
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
<<<<<<< HEAD
?>
=======

?>

>>>>>>> 92a4458807f564be632d133b55f7e03d0fe9545a
<!DOCTYPE html>
<html>
<head>
    <title>Class 4 Lab</title>
</head>
<body>
<<<<<<< HEAD
=======

>>>>>>> 92a4458807f564be632d133b55f7e03d0fe9545a
</body>
</html>
=======
    echo sqrt(2 * GRAVITY * $height);
}
if (isset($_POST['submit'])) {
    $truncateFloatInput = $_POST["truncateFloat"];
    $farenheit2KelvinInput = $_POST["farenheit2Kelvin"];
    $dodecahedronVolumeInput = $_POST["dodecahedronVolume"];
    $impactVelocityInput = $_POST["impactVelocity"];
} else {
    $truncateFloatInput = "";
    $farenheit2KelvinInput = "";
    $dodecahedronVolumeInput = "";
    $impactVelocityInput = "";
}
$form_layout = <<< EOD
<p>
<form method="post" action="">
<label name="truncateFloat">Floating Point Value</label><input type="text" name="truncateFloat"><br>
<label name="farenheit2Kelvin">Farenheit Value</label><input type="text" name="farenheit2Kelvin"><br>
<label name="dodecahedronVolume"></label>Dodecahedron Side Value<input type="text" name="dodecahedronVolume"><br>
<label name="impactVelocity">Height of Fall Value</label><input type="text" name="impactVelocity"><br>
<input type="submit" value="submit" name="submit">
</form>
</p>
EOD;
?>
<html>
<head>
<title>Simple PHP Form Example</title>
</head>
<body>
<?php
if (!isset($_POST['submit'])) {
    // display the form
    echo $form_layout;
} else {
    if (!empty($truncateFloatInput)) {
        echo "The truncated floating point value is:";
        truncateFloat($truncateFloatInput);
        echo "<br>";
    }
    if (!empty($farenheit2KelvinInput)) {
        echo "The Kelvin value is:";
        farenheit2Kelvin($farenheit2KelvinInput);
        echo "<br>";
    }
    if (!empty($dodecahedronVolumeInput)) {
        echo "The dodecahedron volume value is:";
        dodecahedronVolume($dodecahedronVolumeInput);
        echo "<br>";
    }
    if (!empty($impactVelocityInput)) {
        echo "The splat value is:";
        impactVelocity($impactVelocityInput);
        echo "<br>";
    }
}
?>
</body>
</html>
<<<<<<< HEAD
>>>>>>> upstream/master
=======
>>>>>>> upstream/master
>>>>>>> 92a4458807f564be632d133b55f7e03d0fe9545a
