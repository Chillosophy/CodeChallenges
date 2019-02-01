<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/cut-the-sticks/problem
 */

function cutTheSticks($arr) {
	$return = [];
	$iteration = 0;
	while(1) {
		if(count($arr) === 0) {
			break;
		}
		$shortest = min(array_keys(array_count_values($arr)));
		$return[$iteration] = 0;
		foreach($arr as $index => $stickLength) {
			$return[$iteration]++;
			if($stickLength - $shortest <= 0) {
				unset($arr[$index]);
			} else {
				$arr[$index] -= $shortest;
			}
		}
		$iteration++;
	}
	return $return;
}

var_dump(cutTheSticks([5, 4, 4, 2, 2, 8])); // [6, 4, 2, 1]
var_dump(cutTheSticks([1, 2, 3, 4, 3, 3, 2, 1])); // [8, 6, 4, 1]
