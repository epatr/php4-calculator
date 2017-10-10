<?php

include('ScientificCalculator.inc');

?>

<HTML>
	<HEAD>
		<TITLE>Try it Out - A Scientific Calculator</TITLE>
	</HEAD>
	<BODY>
	<?php
	$a = 20;
	$b = 4;
	echo("Our two numbers are $a and $b<BR>\n");

	$myCalculator = new ScientificCalculator();

	$sum = $myCalculator->add($a, $b);
	echo("Their sum is $sum<BR>\n");

	$difference = $myCalculator->subtract($a, $b);
	echo("Their difference is $difference<BR>\n");

	$product = $myCalculator->multiply($a, $b);
	echo("Their product is $product<BR>\n");

	$quotient = $myCalculator->divide($a, $b);
	echo("Their quotient is $quotient<br>\n");

	$sine = $myCalculator->getSine($a);
	echo("The sine of $a is $sine<br>\n");

	$cosine = $myCalculator->getCosine($a);
	echo("The cosine of $a is $cosine<BR>\n");

	$logarithm = $myCalculator->getLogarithm($a);
	echo("The natural logarithm of $a is $logarithm<BR>\n");

	$power = $myCalculator->getPower($a, $b);
	echo("$a raised to the power $b is $power<BR?\n");
	?>
	</BODY>
</HTML>
