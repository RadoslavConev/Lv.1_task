<?php

$arr = ["abc", 
 "a", 
 "b", 
 "c", 
 "def", 
 "g", 
 "ghi"
];
$arr_count = count($arr) - 1;
$raw_result = 0;

for ($k=0; $k < $arr_count; $k++) { 
	$front = substr($arr[$k+1], 0, 1);
	$rear = substr($arr[$k], -1);
		if ($front != $rear) {
			$raw_result++;
		}
}

$replaced_result = 0;

for ($i=0; $i < $arr_count; $i++) { 
	$front = substr($arr[$i+1], 0, 1);
	$rear = substr($arr[$i], -1);
		if ($front != $rear) {
			$arr[$i + 1] = substr_replace($arr[$i + 1], $rear, 0, 1);
			$replaced_result++;
		}
	echo "<pre>";
	var_dump($front);
	var_dump($rear);
	var_dump($arr);
	echo "</pre>";
}
//var_dump($front);
//var_dump($rear);
//echo $result;

if ($raw_result == $replaced_result) {
	echo 'raw result (1) ' . $replaced_result;
}elseif ($replaced_result > $raw_result) {
	$result = $replaced_result - $raw_result;
	echo "(2) " . $result;
}elseif ($raw_result > $replaced_result) {
	$result = $raw_result - $replaced_result;
	echo "(3) " . $result;
}