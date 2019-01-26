<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/bon-appetit/problem
 */

function bonAppetit($bill, $k, $b) {
	unset($bill[$k]);
	$totalBill = array_sum($bill);
	return $totalBill - $b === $b
		? 'Bon Appetit'
		: $b - $totalBill / 2;
}

var_dump(bonAppetit([3, 10, 2, 9], 1, 12)); // 5
var_dump(bonAppetit([3, 10, 2, 9], 1, 7)); // "Bon Appetit"