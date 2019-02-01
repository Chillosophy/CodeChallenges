<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/library-fine/problem
 */

function libraryFine($d1, $m1, $y1, $d2, $m2, $y2) {
	if($y1 > $y2)
		return 10000;

	if($m1 > $m2 && $y1 === $y2)
		return ($m1 - $m2) * 500;

	if($d1 > $d2 && $m1 === $m2 && $y1 === $y2)
		return ($d1 - $d2) * 15;

	return 0;
}

var_dump(libraryFine(9, 6, 2015, 6, 6, 2015));
var_dump(libraryFine(2, 7, 2014, 1, 1, 2015));