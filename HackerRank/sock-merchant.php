<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/sock-merchant/problem
 */

function sockMerchant($n, $ar) {
	$pairs = 0;
	foreach(array_count_values($ar) as $occurences) {
		$pairs += floor($occurences / 2);
	}
	return $pairs;
}

var_dump(sockMerchant(9, [10, 20, 20, 10, 10, 30, 50, 10, 20])); // 3
var_dump(sockMerchant(10, [1, 1, 3, 1, 2, 1, 3, 3, 3, 3])); // 4