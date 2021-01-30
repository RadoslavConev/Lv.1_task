<?php

$arr = [ ];
$arr_count = count($arr) - 1;
$result = 0;

for ($i=0; $i < $arr_count; $i++) { 
	$front = substr($arr[$i+1], 0, 1);
	$rear = substr($arr[$i], -1);
		if ( ($i + 2) <= $arr_count ) {
			$next_front = substr($arr[$i + 2], 0, 1);
			$next_rear = substr($arr[$i + 1], -1);
		}
	if ($front != $rear && $next_rear != $next_front) {
			$arr[$i + 1] = substr_replace($arr[$i + 1], $rear, 0, 1);
			$result++;
		}elseif ($front != $rear && $next_rear == $next_front) {
			if ( strlen($arr[$i + 1]) == 1 ){
				$arr[$i] = substr_replace($arr[$i], $next_rear, -1);
			}elseif (strlen($arr[$i + 1]) >= 2 ) {
				$arr[$i + 1] = substr_replace($arr[$i + 1], $rear, 0, 1);
			}
			$result++;
		}
	$next_front = "1";
	$next_rear = "2";
}

echo $result;