<?php 
	$price_1 =5;
	$price_2 = 8;
	$price_3 = 10;
	if ($price_1 < $price_3) {
		if ($price_2 > $price_3) {
			echo $price_1*$price_3;
		} else {
			echo $price_1;
		}
	} else {
		exit();
	}
?>
