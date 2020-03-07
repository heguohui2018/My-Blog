<?php 
	$float = 88.8;
	$datatype = gettype($float);
	var_dump($datatype);
	echo $datatype;

	$heguohui = false;
	if (is_bool($heguohui)) {
		echo "yes";
	} else {
		echo "no";
	}

	$p ;
	if (is_null($p)) {
		echo "yes";
	} else {
		echo "no";	
	}

?>
