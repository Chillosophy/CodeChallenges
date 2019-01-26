<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/beautiful-days-at-the-movies/problem
 */

function beautifulDays($i, $j, $k) {
	$beautifulDay = 0;
	for($c = $i; $c <= $j; $c++) {
		if(($c - (int)strrev((string)$c)) % $k === 0) {
			$beautifulDay++;
		}
	}
	return $beautifulDay;
}

var_dump(beautifulDays(20, 23, 6)); // 2
var_dump(beautifulDays(13, 45, 3)); // 33