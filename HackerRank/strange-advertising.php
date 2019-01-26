<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/strange-advertising/problem
 */

function viralAdvertising($n, $value = 5) {
	if($n === 0) return 0;
	$likes = 0;
	for($day = 1; $day <= $n; $day++) {
		$likes += floor($value / 2);
		$value = floor($value / 2) * 3;
	}
	return $likes;
}

var_dump(viralAdvertising(3)); // 9
var_dump(viralAdvertising(4)); // 15
var_dump(viralAdvertising(5)); // 24