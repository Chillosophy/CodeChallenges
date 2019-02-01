<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/append-and-delete/problem
 */

function appendAndDelete($s, $t, $k) {
	if(strlen($s) + strlen($t) <= $k)
		return 'Yes';

	for($c = 0; $c < min(strlen($s), strlen($t)); $c++) {
		if($s{$c} !== $t{$c}) {
			break;
		}
	}

	$min = strlen($s) - $c + strlen($t) - $c;
	return $k >= $min && ($k - $min) % 2 === 0
		? 'Yes'
		: 'No';
}

var_dump(appendAndDelete('hackerhappy', 'hackerrank', 9)); // Yes
var_dump(appendAndDelete('aba', 'aba', 7)); // Yes
var_dump(appendAndDelete('ashley', 'ash', 2)); // No
var_dump(appendAndDelete('abcd', 'abcdert', 10)); // No
var_dump(appendAndDelete('aaa', 'a', 5)); // Yes
var_dump(appendAndDelete('abcdef', 'fedcba', 15)); // Yes
var_dump(appendAndDelete('asdfqwertyuighjkzxcvasdfqwertyuighjkzxcvasdfqwertyuighjkzxcvasdfqwertyuighjkzxcvasdfqwertyuighjkzxcv', 'asdfqwertyuighjkzxcvasdfqwertyuighjkzxcvasdfqwertyuighjkzxcvasdfqwertyuighjkzxcvasdfqwertyuighjkzxcv', 20)); // Yes
var_dump(appendAndDelete('zzzzz', 'zzzzzzz', 4)); // Yes
var_dump(appendAndDelete('aaaaaaaaaa', 'aaaaa', 7)); // Yes

