<?php
/**
 * CodeChallenges // (c) Joran Darwinkel 2019
 * https://www.hackerrank.com/challenges/designer-pdf-viewer/problem
 */

function designerPdfViewer($h, $word) {
	return array_reduce(
		array_unique(str_split($word)),
		function($max, $item) use($h) {
			return max($max, $h[ord($item) - 97]);
		},
		0
	) * strlen($word);
}

var_dump(designerPdfViewer([1, 3, 1, 3, 1, 4, 1, 3, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5], 'abc')); // 9
var_dump(designerPdfViewer([1, 3, 1, 3, 1, 4, 1, 3, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 7], 'zaba')); // 28