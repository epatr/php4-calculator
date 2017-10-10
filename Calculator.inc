<?php

class Calculator
{

	//Declare the internal variable
	var $storedValue;

	//Accessor functions
	//
	function setValue( $passedValue )
	{
		$this->storedValue = $passedValue;
	}
	function getValue()
	{
		return $this->storedValue;
	}
	function addValue( $passedValue )
	{
		$this->storedValue += $passedValue;
	}

	// Constructor function
	//
	function Calculator()
	{
		$this->storedValue = 0;
	}

	//Calculator functions as before
	//

	function add( $number1, $number2 )
	{
		return $number1 + $number2;
	}

	function subtract( $number1, $number2 )
	{
		return $number1 - $number2;
	}

	function multiply( $number1, $number2 )
	{
		return $number1 * $number2;
	}

	function divide( $number1, $number2 )
	{
		return $number1 / $number2;
	}
}