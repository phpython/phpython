<?php
xdebug_disable();
ini_set('display_errors',true);
error_reporting(E_ALL);

##
require_once __DIR__.'/lang/python/python.main.php';

##
class phpython {
	
	##
	public static function set_config($option,$value) {
	
		##
		lang_python_main::set_config($option,$value);
	}
		
	## 
	public static function import($module) {
		
		##
		lang_python_main::import($module);					
	}
		
	##
	public static function exec($file) {
		
		##
		lang_python_main::exec($file);							
	}
}
