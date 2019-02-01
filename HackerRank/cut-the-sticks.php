<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/cut-the-sticks/problem
 */

function cutTheSticks($arr) {
	$return = [];
	while(count($arr) > 0) {
		$return[] = count($arr);
		$arr = array_filter(
			$arr,
			function($var) use ($arr) {
				return $var - min($arr) > 0
					? $var - min($arr)
					: false;
			}
		);
	}
	return $return;
}

var_dump(cutTheSticks([5, 4, 4, 2, 2, 8])); // [6, 4, 2, 1]
var_dump(cutTheSticks([1, 2, 3, 4, 3, 3, 2, 1])); // [8, 6, 4, 1]
