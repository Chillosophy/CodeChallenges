<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/grading/problem
 */


function gradingStudents($grades) {
    $return = [];
    foreach($grades as $grade) {
        if($grade >= 38 && $grade % 5 > 2) {
            $return[] = $grade + (5 - $grade % 5);
        } else {
            $return[] = $grade;
        }
    }
    return $return;
}

var_dump(gradingStudents([73, 67, 38, 33])); // [75, 67, 40, 33]
