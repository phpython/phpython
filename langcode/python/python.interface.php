<?php

trait lang_python_interface {

	public static function python_command($cmd,$parms) {
		switch($cmd) {
			case "print": echo $parms; break;
		}
	}

	public static function python_for() {
		echo "START-FOR";
	}

	public static function python_for_end() {
		echo "END-FOR";
	}

	
	public static function python_list($v) {
		echo "List: ";
		var_dump($v);

		return 1;
	}

	public static function python_mod($a,$b){return is_integer($a)?$a%$b:$a;}

	public static function python_class($a) {
		static::$state = 'class';
		static::$class = array(
			'name' => $a->name,
		);		
	}

	public static function python_class_end() {				
		$classname = static::$class['name'];
		$classfile = $classname.'.class';
		$classcode = '<?php class '.$classname.' {' ."\n";
		foreach(static::$class['attr'] as $name=>$value) {
			$classcode.= 'public $'.$name.'='.'"'.$value.'"'.';'."\n";			
		}
		$classcode.= '}';
		file_put_contents($classfile,$classcode);
		require_once($classfile);
		static::$state = '';
	}

	public static function python_def($a) {
		static::$def = array(
			'name' => $a->name,
		);
	}

	public static function python_def_end() {
		$funcname = static::$def['name'];
		eval('function '.$funcname.'(){}');
	}
	
	
	public static function python_comparsion($a,$op,$b) {
		echo 'comp:';
		static::python_test_name($a);
		static::python_test_name($b);
		var_dump($a,$op,$b);
		die();
	}
	
	public static function python_test_name($a) {
		if (is_object($a)) {
			if (!isset(static::$names[$a->name])) {
				throw new Exception('NameError');
			}			
		}		
	}
	
	public static function python_statament_run($a) {		
		echo "RUN!\n";
		static::$statament->run($a);	
		python_statament_set(null);
	}
	
	public static function python_statament_set($a) {
		echo "SET!\n";
		static::$statament = $a;		
	}
	
	
	public static function python_import($n) {
		//echo 'import:';
		//var_dump($n);
		$file = $n->name.".py";	
		lang_python::python_execfile($file,false);		
	}
	
	
	
}