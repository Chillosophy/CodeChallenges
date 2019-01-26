<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/divisible-sum-pairs/problem
 */

function divisibleSumPairs($n, $k, $ar) {
    $hit = 0;
    for($x = 0; $x < $n; $x++) {
        for($y = $x + 1; $y < $n; $y++) {
            if(($ar[$x] + $ar[$y]) % $k === 0) {
                $hit++;
            }
        }
    }
    return $hit;
}

var_dump(divisibleSumPairs(6, 3, [1, 3, 2, 6, 1, 2])); // 5