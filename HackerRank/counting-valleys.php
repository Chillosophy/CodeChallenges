<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/counting-valleys/problem
 */

function countingValleys($n, $s) {
	$elevation = 0;
	$inValley = false;
	$valleyCount = 0;
	for($c = 0; $c < $n; $c++) {
		$elevation += $s{$c} === 'U' ? 1 : -1;
		if($elevation < 0 && !$inValley) {
			$inValley = true;
		}
		if($elevation === 0 && $inValley) {
			$inValley = false;
			$valleyCount++;
		}
	}
	return $valleyCount;
}

var_dump(countingValleys(8, 'DDUUUUDD')); // 1
var_dump(countingValleys(8, 'UDDDUDUU')); // 1
var_dump(countingValleys(16, 'DDUUUUDDDDUUUUDD')); // 2