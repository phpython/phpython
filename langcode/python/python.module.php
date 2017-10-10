<?php


class lang_python_module {
	
	##
	static $intance = null;
	
	##
	public static function get_instance() {
		
		if (static::$intance == null) {
			static::$intance = new static();			
		}
		
		return static::$intance;
	}
	
	##
	public function __toString() {		
        $name = get_called_class();
		return "<module '{$name}' (built-in)>";
    }
	
}
