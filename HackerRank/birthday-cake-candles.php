<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/birthday-cake-candles/problem
 */

function birthdayCakeCandles($ar) {
    return count(array_keys($ar, max($ar)));
}

var_dump(birthdayCakeCandles([3, 2, 1, 3])); // 2