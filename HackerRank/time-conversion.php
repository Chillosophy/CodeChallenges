<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/time-conversion/problem
 */


function timeConversion($s) {
    return date('H:i:s', strtotime($s));
}

var_dump(timeConversion('07:05:45PM')); // 19:05:45