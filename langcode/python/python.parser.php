<?php

##
require_once __DIR__.'/../../lime/parse_engine.php';
require_once __DIR__.'/python.lang.php';

##
class lang_python_parser {
	
	##
	static $parser = null;  
 			
	## retrieve the singleton parser
	public static function get_parser() {
		
		##
		if (static::$parser == null) {
			
			##
			static::$parser = new parse_engine(new lang_python_lang());	
		}
		
		##
		return static::$parser;
	}	
}