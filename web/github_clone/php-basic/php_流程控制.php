<?php 
	$num1 = $_GET["num1"];
	$num2 = $_GET["num2"];
	$num3 = $_GET['fh'];
	if (!is_numeric($num1) || !is_numeric($num2)) {
		echo '请输入数值类型';
	}
	if ($fh == 'jia') {
		echo $num1.'+'.$num2.'='.($num1+$num2);
	}
	
?>
