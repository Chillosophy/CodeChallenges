<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/apple-and-orange/problem
 */


function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    $appleHit = 0; $orangeHit = 0;
    foreach($apples as $apple) {
        if($a + $apple >= $s && $a + $apple <= $t) {
            $appleHit++;
        }
    }
    foreach($oranges as $orange) {
        if($b + $orange >= $s && $b + $orange <= $t) {
            $orangeHit++;
        }
    }

    return [$appleHit, $orangeHit];
}


var_dump(countApplesAndOranges(7, 11, 5, 15, [-2, 2, 1], [5, -6])); // [1, 1]
var_dump(countApplesAndOranges(2, 3, 1, 5, [2], [-2])); // [1, 1]