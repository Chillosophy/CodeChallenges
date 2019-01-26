<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/kangaroo/problem
 */


function kangaroo($x1, $v1, $x2, $v2)
{
    if($v2 < $v1) {
        if (($x1 - $x2) % ($v2 - $v1) == 0) {
            return 'YES';
        }
    }
    return 'NO';
}


var_dump(kangaroo(0, 3, 4, 2)); // YES
var_dump(kangaroo(0, 2, 5, 3)); // NO
var_dump(kangaroo(4523, 8092, 9419, 8076)); // YES