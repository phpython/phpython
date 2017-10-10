<?php

##
class lang_python_io {
		
	##
	public static function __print__($test) {
		
		##
		if (is_object($test)) {
			lang_python_phpc::push('echo $'.$test->name.'."\n";');							
		} 
		
		##
		else if (is_string($test)) { 
			lang_python_phpc::push('echo "'.$test.'\n";');				
		}
		
		##
		else {			
			lang_python_phpc::push("echo $test;");
		}
	}
	
	
}