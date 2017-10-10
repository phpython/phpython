<?php

trait lang_python_resolve {
	
	public static function python_resolve_atom($expr) {
		
		if (is_object($expr)) {
			if (isset(static::$names[$expr->name])) {
				return $expr->name;
			} else {
				throw new Exception("NameError: name '{$expr->name}' is not defined");
			}
		}
		
		return $expr;
		
	}
	
	public static function python_resolve_atom_trailers($atom,$trailers) {
		if (!$trailers) {
			return static::python_resolve_atom($atom);
		}		
	}
	
}