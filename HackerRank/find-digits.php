<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/find-digits/problem
 */

function findDigits($n) {
	$digits = 0;
	$uniqueDigits = array_count_values(str_split((string)$n)); // Oh boy..
	unset($uniqueDigits[0]);
	foreach($uniqueDigits as $digit => $occurences) {
		if($n % $digit === 0) {
			$digits += $occurences;
		}
	}
	return $digits;
}

var_dump(findDigits(12)); // 2
var_dump(findDigits(1012)); // 3