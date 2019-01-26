<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/plus-minus/problem
 */

function plusMinus($arr) {
    $pm = array_reduce(
        $arr,
        function($carry, $item) {
            switch($item <=> 0) {
                case -1:
                    $carry[1]++;
                    break;
                case 0:
                    $carry[2]++;
                    break;
                case 1:
                    $carry[0]++;
                    break;
            }
            return $carry;
        },
        [0, 0, 0]
    );
    return [
        round($pm[0] / count($arr), 6),
        round($pm[1] / count($arr), 6),
        round($pm[2] / count($arr), 6)
    ];

}

var_dump(plusMinus([-4, 3, -9, 0, 4, 1])); // [0.500000, 0.333333, 0.166667]