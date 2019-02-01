<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/jumping-on-the-clouds-revisited/problem
 */

function jumpingOnClouds($c, $k) {
	$health = 100;
	$firstRun = true;
	$i = 0;
	while(!($i === 0 && !$firstRun)) {
		$firstRun = false;
		$health -= $c[$i] === 1 ? 3 : 1;
		$i += $k;
		if($i > count($c) - 1) {
			$i = 0;//$i % count($c);
		}
	}
	return $health;
}

var_dump(jumpingOnClouds([0, 0, 1, 0], 2)); // 96
var_dump(jumpingOnClouds([0, 0, 1, 0, 0, 1, 1, 0], 2)); // 92
var_dump(jumpingOnClouds([1, 1, 1, 0, 1, 1, 0, 0, 0, 0], 3)); // 94