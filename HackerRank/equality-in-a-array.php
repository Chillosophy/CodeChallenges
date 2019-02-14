<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/equality-in-a-array/problem
 */

function equalizeArray($arr) {
    $weighted = array_count_values($arr);
    rsort($weighted);
    foreach($weighted as $key => $value) {
        unset($weighted[$key]);
        break;
    }
    return array_sum($weighted);
}

var_dump(equalizeArray([3, 3, 2, 1, 3])); // 2
var_dump(equalizeArray([1, 2, 3, 1, 2, 3, 3, 3])); // 4