<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/repeated-string/problem
 */

function repeatedString($s, $n) {
	if(strstr($s, 'a') === false)
		return 0;

	return (floor($n / strlen($s)) * array_count_values(str_split($s))['a']) + (array_count_values(str_split(substr($s, 0, $n % strlen($s))))['a'] ?? 0);
}

var_dump(repeatedString('aba', 10)); // 7
var_dump(repeatedString('a', 1000000000000)); // 1000000000000