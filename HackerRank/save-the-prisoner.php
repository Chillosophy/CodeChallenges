<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/save-the-prisoner/problem
 */

function saveThePrisoner($n, $m, $s) {
	$dangerSpot = ($m + ($s - 1) % $n) % $n;
	return $dangerSpot === 0 ? $n : $dangerSpot;
}


var_dump(saveThePrisoner(5, 2, 1)); // 2
var_dump(saveThePrisoner(5, 2, 2)); // 3
var_dump(saveThePrisoner(7, 19, 2)); // 6
var_dump(saveThePrisoner(3, 7, 3)); // 3
