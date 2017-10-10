<?php
include("Calculator.inc");

class ScientificCalculator extends Calculator
{
	function getSine($value)
	{
		return sin($value);
	}
	function getCosine($value)
	{
		return cos($value);
	}
	function getLogarithm($value)
	{
		return log($value);
	}
	function getPower($value1, $value2)
	{
		return pow($value1, $value2);
	}
}
?>