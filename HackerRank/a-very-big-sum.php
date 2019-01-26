<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/a-very-big-sum/problem
 */

function aVeryBigSum($ar) {
	return array_sum($ar);
}

var_dump(aVeryBigSum([1000000001, 1000000002, 1000000003, 1000000004, 1000000005])); // 5000000015