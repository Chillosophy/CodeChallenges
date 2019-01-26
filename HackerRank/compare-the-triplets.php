<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/compare-the-triplets/problem
 */

function compareTriplets($a, $b) {
	$return = [0, 0];
	for($x = 0; $x < count($a); $x ++) {
		$cmp = $a[$x] <=> $b[$x];
		if(abs($cmp) === 1) {
			$return[$cmp === 1 ? 0 : 1] ++;
		}
	}

	return $return;
}

var_dump(compareTriplets([5, 6, 7], [3, 6, 10])); // [1, 1]
var_dump(compareTriplets([17, 28, 30], [99, 16, 8])); // [2, 1]