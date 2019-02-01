<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/picking-numbers/problem
 */

function pickingNumbers($a) {
	$c = array_count_values($a);
	ksort($c);
	$lastI = key($c); $lastV = 0; $maxV = 0;
	foreach($c as $i => $v) {
		if($lastI != $i - 1) {
			$lastV = 0;
		}
		$maxV = max($maxV, $v + $lastV);
		$lastV = $v;
		$lastI = $i;
	}
	return $maxV;
}

var_dump(pickingNumbers([4, 6, 5, 3, 3, 1])); // 3
var_dump(pickingNumbers([1, 2, 2, 3, 1, 2])); // 5
var_dump(pickingNumbers([1, 1, 1, 1, 2, 2, 4, 5, 6, 7])); // 6
var_dump(pickingNumbers([1, 2, 2, 2, 3, 3, 5, 5, 5, 5, 5, 5, 6, 6, 6, 7, 7])); // 9
var_dump(pickingNumbers([4, 2, 3, 4, 4, 9, 98, 98, 3, 3, 3, 4, 2, 98, 1, 98, 98, 1, 1, 4, 98, 2, 98, 3, 9, 9, 3, 1, 4, 1, 98, 9, 9, 2, 9, 4, 2, 2, 9, 98, 4, 98, 1, 3, 4, 9, 1, 98, 98, 4, 2, 3, 98, 98, 1, 99, 9, 98, 98, 3, 98, 98, 4, 98, 2, 98, 4, 2, 1, 1, 9, 2, 4])); // 22