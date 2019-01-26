<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/day-of-the-programmer/problem
 */

function dayOfProgrammer($year) {
	if($year === 1918) {
		return '26.09.1918';
	}
	if(($year <= 1917 && $year %4 === 0)
        || ($year > 1918 && $year % 400 === 0)
	    || ($year % 4 === 0 && $year % 100 !== 0)) {
		return '12.09.' . $year;
	}
	return '13.09.'. $year;
}

var_dump(dayOfProgrammer(2017)); // 13.09.2017
var_dump(dayOfProgrammer(2016)); // 12.09.2016
var_dump(dayOfProgrammer(1800)); // 12.09.1800