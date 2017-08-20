<?php


trait lang_python_comparison {
	
	public static function python_comparison($expr1,$op,$expr2) {
						
		switch($op) {
			case '>': return $expr1 > $expr2;
			case '<': return $expr1 < $expr2;		
		}
				 
	} 
	
}