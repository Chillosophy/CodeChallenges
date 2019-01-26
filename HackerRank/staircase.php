<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/staircase/problem
 */

// Complete the staircase function below.
function staircase($n) {
    for($x = 1; $x <= $n; $x++) {
        echo str_repeat(' ',$n - $x) . str_repeat('#', $x) . PHP_EOL;
    }
}

var_dump(staircase(8));