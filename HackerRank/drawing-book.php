<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/drawing-book/problem
 */

function pageCount($n, $p) {
	$doublePageCount = ceil(($n + 1) / 2);
	$wantedPageCount = ceil(($p + 1) / 2);
	return min(
		$wantedPageCount - 1,
		$doublePageCount - $wantedPageCount
	);
}

var_dump(pageCount(6, 2)); // 1
var_dump(pageCount(5, 4)); // 0
