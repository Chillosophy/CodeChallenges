<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/diagonal-difference/problem
 */

function diagonalDifference($arr) {
    $size= count($arr);
    $left = 0; $right = 0;
    for($y = 0; $y < $size; $y++) {
        $left += $arr[$y][$y];
        $right += $arr[$y][$size - 1 - $y];
    }
    return abs($left - $right);
}

var_dump(diagonalDifference([
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
])); // 0

var_dump(diagonalDifference([
    [11, 2, 4],
    [4, 5, 6],
    [10, 8, -12]
])); // 15
