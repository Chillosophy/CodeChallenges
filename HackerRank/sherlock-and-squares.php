<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/sherlock-and-squares/problem
 */

function squares($a, $b) {
	return floor(sqrt($b)) - ceil(sqrt($a)) + 1;
}

var_dump(squares(3, 9)); // 2
var_dump(squares(17, 24)); // 0