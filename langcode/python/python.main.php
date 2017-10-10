<?php

##
require_once __DIR__.'/python.util.php';
require_once __DIR__.'/python.exec.php';
require_once __DIR__.'/python.config.php';

##
class lang_python_main {
	
	## set configuration value
	public static function set_config($option,$value) {
		
		##
		lang_python_config::set($option,$value);		
	}		
	
	## set configuration value
	public static function exec($file) {
		
		##
		lang_python_exec::__exec__($file);		
	}			
}
 