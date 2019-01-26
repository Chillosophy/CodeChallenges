<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/circular-array-rotation/problem
 */

function circularArrayRotation($a, $k, $queries = []) {
	$return = [];
	$n = count($a);
	foreach($queries as $query) {
		$shift = $n - ($k % $n);
		$return[] = $a[($query + $shift) % $n];
	}
	return $return;
}

var_dump(circularArrayRotation([1, 2, 3], 2, [0, 1, 2])); // [2, 3, 1]
