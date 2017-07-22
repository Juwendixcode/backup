<?php
	
	$array = array(
		'Mobil', 'Bus', 'Truk', 'Sepeda motor', 'Sepeda', 'Becak', 'Andong'
	);
	echo 'sebelum<br>';
	foreach($array as $key) {
		echo $key.'<br>';
	}
	
	sort($array);
	echo '<br>';
	echo 'sort<br>';
	foreach($array as $key) {
		echo $key.'<br>';
	
	}
	asort($array);
	echo '<br>';
	echo 'asort<br>';
	foreach($array as $key) {
		echo $key.'<br>';
	}
	ksort($array);
	echo '<br>';
	echo 'ksort<br>';
	foreach($array as $key) {
		echo $key.'<br>';
	}
	rsort($array);
	echo '<br>';
	echo 'rsort<br>';
	foreach($array as $key) {
		echo $key.'<br>';
	}
	arsort($array);
	echo '<br>';
	echo 'arsort<br>';
	foreach($array as $key) {
		echo $key.'<br>';
	}
	krsort($array);
	echo '<br>';
	echo 'krsort<br>';
	foreach($array as $key) {
		echo $key.'<br>';
	}

?>
