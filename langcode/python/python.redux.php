<?php

class lang_python_redux {
		
	##
	public static function atom_trailers($atom,$trailers=null) {		

		if ($trailers) {
			return $atom->name.'()';

		} else {
			return $atom;			
		}
	}
	
}