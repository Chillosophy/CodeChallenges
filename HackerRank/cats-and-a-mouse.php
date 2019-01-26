<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/cats-and-a-mouse/problem
 */

function catAndMouse($x, $y, $z) {
	$mouseDiffA = max($x, $z) - min($x, $z);
	$mouseDiffB = max($y, $z) - min($y, $z);
	if($mouseDiffA === $mouseDiffB) {
		return 'Mouse C';
	}
	if($mouseDiffA < $mouseDiffB) {
		return 'Cat A';
	}
	return 'Cat B';
}

var_dump(catAndMouse(1, 2, 3));
var_dump(catAndMouse(1, 3, 2));