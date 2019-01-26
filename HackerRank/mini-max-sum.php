<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/mini-max-sum/problem
 */


function miniMaxSum($arr) {
    sort($arr);
    return [
    	array_sum(array_slice($arr, 0, 4)),
        array_sum(array_slice($arr, 1))
    ];
}

var_dump(miniMaxSum([1, 2, 3, 4, 5])); // [10, 14]
