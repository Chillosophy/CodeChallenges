<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/the-birthday-bar/problem
 */

function birthday($s, $d, $m) {
    $squares = [];
    $total = 0;
    foreach($s as $currentSquare) {
        $squares[] = $currentSquare;
        if(count($squares) > $m) {
            array_shift($squares);
        }
        if(count($squares) === $m && array_sum($squares) === $d) {
            $total++;
        }
    }
    return $total;
}

var_dump(birthday([1, 2, 1, 3, 2], 3, 2)); // 2
var_dump(birthday([1, 1, 1, 1, 1, 1], 3, 2)); // 0
var_dump(birthday([4], 4, 1)); // 1