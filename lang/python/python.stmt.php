<?php

##
class lang_python_stmt {

	##
	public static function def_begin($name,$parameters) {
		
		##
		if (!is_null($parameters)) {
			lang_python_phpc::push('function '.$name->name.'($'.$parameters->name.') {');										
		} 
		
		##
		else {
			lang_python_phpc::push('function '.$name->name.'() {');							
		}		
	}	
	
	##
	public static function def_end() {
		
		##
		lang_python_phpc::push('}');				
	}
	
	##
	public static function __return__($testlist=null) {
		
		##
		if (!is_null($testlist)) {
			lang_python_phpc::push('return $'.$testlist->name.';');							
		} 
		
		##
		else {
			lang_python_phpc::push('return;');							
		}
	}
	
	##
	public static function if_begin($test) {
		
		##
		if (is_object($test)) {
			lang_python_phpc::push('if ($'.$test->name.') {');	
		} 
		
		##
		else {
			lang_python_phpc::push('if ('.$test.') {');				
		}
	}
	
	##
	public static function if_else() {
	
		##
		lang_python_phpc::push('else {');									
	}
	
	##
	public static function if_end() {
		
		##
		lang_python_phpc::push('}');									
	}
	
	
	##
	public static function class_begin($name) {
		
		##
		lang_python_phpc::push('class '.$name->name.' {');											
	}
	
	##
	public static function class_end() {
		
		##
		lang_python_phpc::push('}');											
	}
	
	##
	public static function import($dotted_as_names) {
		
		##
		$name = $dotted_as_names->name;
		$file = __DIR__."/module/{$name}.php";
		
		##
		lang_python_phpc::push("require_once '{$file}';");														
		lang_python_phpc::push("\${$name} = lang_python_module_{$name}::get_instance();");														
	}
	
	
	##
	public static function expr($expr) {
				
		##
		lang_python_phpc::push($expr.';');														
	}
	
}

