<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/the-hurdle-race/problem
 */

function hurdleRace($k, $height) {
	return max(max($height) - $k, 0);
}

var_dump(hurdleRace(4, [1, 6, 3, 5, 2])); // 2
var_dump(hurdleRace(7, [2, 5, 4, 5, 2])); // 0