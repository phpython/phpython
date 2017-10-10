<?php

class lang_python_memory {
	
	##
	static $mem = array();
	
	##
	public static function assign($testlist1,$testlist2) {		
		
		#var_dump($testlist1,$testlist2);
		
		#die();
		
		if (is_object($testlist1)) {
			static::$mem[$testlist1->name] = $testlist2;
		}				
	}

	##
	public static function get_value($literal) {		
		return static::$mem[$literal->name];
	}
	
	
}