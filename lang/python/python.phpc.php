<?php

##
class lang_python_phpc {
	
	static $buffer = null;
	
	##
	public static function clear() {
				
		##
		static::$buffer = "";
	}
	
	##
	public static function buffer() {
		
		##
		return static::$buffer;
	}
	
	
	##
	public static function push($phpc) {
		
		static::$buffer .= $phpc."\n";
		
		
	} 
	
	
}