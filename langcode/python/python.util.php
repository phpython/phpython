<?php

if (!function_exists('re')) {
	function re($regex,$input,&$output) {
		return preg_match($regex,$input,$output);
	}
}

