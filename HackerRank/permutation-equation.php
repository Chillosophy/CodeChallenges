<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/permutation-equation/problem
 */

function permutationEquation($p) {
	$r = [];
	for($x = 1; $x <= count($p); $x++) {
		$r[] = array_search(array_search($x, $p) + 1, $p) + 1;
	}
	return $r;
}

var_dump(permutationEquation([5, 2, 1, 3, 4])); // [4,2,5,1,3]
var_dump(permutationEquation([2, 3, 1])); // [2,3,1]
var_dump(permutationEquation([4, 3, 5, 1, 2])); // [1,3,5,4,2]