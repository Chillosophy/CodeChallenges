<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/between-two-sets/problem
 *
 * Unfortunately the first one I absolutely could not solve without reading the discussion
 */

function getTotalX($a, $b) {
	$maxA = max($a);
	$minB = min($b);
	$result = 0;
	$valid = true;

	for($i = $maxA; $i <= $minB; $i++) {
		foreach($a as $currentA)
			if($i % $currentA !== 0)
				$valid = false;

		if($valid) {
			foreach($b as $currentB)
				if($currentB % $i !== 0)
					$valid = false;
			if($valid)
				$result++;

		}
		$valid = true;
	}
	return $result;
}


var_dump(getTotalX([2, 4], [16, 32, 96])); // 3
var_dump(getTotalX([3, 4], [24, 48])); // 2