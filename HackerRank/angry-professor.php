<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/angry-professor/problem
 */

function angryProfessor($k, $a) {
	return count(array_filter($a, function($value) {
		return $value > 0;
	})) > count($a) - $k
		? 'YES'
		: 'NO';
}

var_dump(angryProfessor(3, [-1, -3, 4, 2])); // YES
var_dump(angryProfessor(2, [0, -1, 2, 1])); // NO