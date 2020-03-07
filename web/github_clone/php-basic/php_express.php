<?php
	/* php表达式 */
	$price_1 = 55;
	$price_2 = 51;
	$price_3 = 52;
	$price_4 = 53;
	$price_5 = 54;
	if ($price_1 < $price_2) {
		echo $price_1;
	} else {
		echo $price_2 + $price_1.'<br/>';
	}

	if ($price_2 < $price_3) {
		echo $price_2.'<br/>';
	} else {
		echo $price_2 - $price_3.'<br/>';
	}

	if ($price_3 > $price_4) {
		echo $price_3.'<br/>';
	} else {
		echo ( $price_3 * $price_4 ).'<br/>';
	}

	if ($price_4 > $price_5) {
		echo $price_4.'<br/>';
	} else {
		echo ( $price_4 / $price_5 ).'<br/>';
	}

	/* if ($price_5 > $price_1) { */
	/* 	echo $price_5.'<br/>'; */
	/* } else { */
	/* 	echo ( $price_1 % $price_5 ).'<br/>'; */

	$x = true;
	$y = false;
	if ($x && $y) {
		echo '执行真区间'.'<br/>';
	} else {
		echo '执行假区间'.'<br/>';
	}

	$x = true;
	$y = false;
	if ($x || $y) {
		echo '执行真区间'.'<br/>';
	} else {
		echo '执行假区间'.'<br/>';
	}
?>
