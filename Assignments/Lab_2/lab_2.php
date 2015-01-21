<?php

/**
 * Lab 2, Arithmatic Lab
 *
 * This lab focuses on your understanding of arithmatic.
 *
 * @version 1.0
 * @author Ryan Bates <rbates@vtc.edu>
 * @since 20150120
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

function truncateFloat($float_value)
{
$truncate = (int)($float_value*100)/100;
echo $truncate;
}

/**
 * Outputs to the console farenheit to Kelvin
 *
 * @param $degrees_f degrees in farenheit
 */
function farenheit2Kelvin($degrees_f)
{
$degrees_k = ($degrees_f - 32) * 5/9 + 273.15;
echo $degrees_k;
}

/**
 * Outputs to the console dodecahedron Volume
 *
 * @param $area area of object
 */
function dodecahedronVolume($area)
{
$volume = ((15 + 7*sqrt(5)) / 4)*pow($area,3);
echo $volume;
}

/**
 * Outputs to the console impact velocity
 *
 * @param $height height of falling object 
 */
function impactVelocity($height)
{
$velocity = sqrt(2*GRAVITY*$height);
echo $velocity;
}

truncateFloat(30.1231231231);
echo "<br>";
farenheit2Kelvin(30);
echo "<br>";
dodecahedronVolume(10);
echo "<br>";
impactVelocity(50);