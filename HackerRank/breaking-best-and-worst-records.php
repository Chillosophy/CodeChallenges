<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/breaking-best-and-worst-records/problem
 */

function breakingRecords($scores) {
    $c = 0;
    foreach($scores as $score) {
        if(++$c === 1) {
            $min = [$score];
            $max = [$score];
            continue;
        }

        if(min(min($min), $score) < min($min)) {
            $min[] = $score;;
        }
        if(max(max($max), $score) > max($max)) {
            $max[] = $score;
        }
    }

    return [count($max) - 1, count($min) - 1];
}

var_dump(breakingRecords([10, 5, 20, 20, 4, 5, 2, 25, 1])); // [2, 4]
var_dump(breakingRecords([3, 4, 21, 36, 10, 28, 35, 5, 24, 42])); // [4, 0]