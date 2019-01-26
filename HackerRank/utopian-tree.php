<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/utopian-tree/problem
 */

function utopianTree($n) {
	$o = 1;
	for($c = 0; $c < $n; $c++)
		$o += $c % 2 == 0 ? $o : 1;
	return $o;
}

var_dump(utopianTree(0)); // 1
var_dump(utopianTree(1)); // 2
var_dump(utopianTree(4)); // 7