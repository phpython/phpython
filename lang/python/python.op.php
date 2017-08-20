<?php

class lang_python_op {
		
	##
	public static function plus($a,$b) {		
		
		##
		return is_string($a) || is_string($b) ? $a . $b : $a + $b;		
	}
	
	
}