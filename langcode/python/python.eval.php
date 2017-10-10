<?php

##
require_once __DIR__.'/python.parser.php';
require_once __DIR__.'/python.tokenize.php';
require_once __DIR__.'/python.phpc.php';
require_once __DIR__.'/python.module.php';
require_once __DIR__.'/python.literal.php';
require_once __DIR__.'/python.stmt.php';
require_once __DIR__.'/python.memory.php';
require_once __DIR__.'/python.redux.php';
require_once __DIR__.'/python.def.php';
require_once __DIR__.'/python.io.php';
require_once __DIR__.'/python.op.php';

##
class lang_python_eval {

	##
	public static function __eval__($code,$file,$endmarker) {
		
		##
		lang_python_phpc::clear();		
		
		##
		if ($file) {
			$name = basename($file); 
			lang_python_phpc::push("\$__file__ = '{$name}';");			
			lang_python_phpc::push("\$__name__ = '__main__';");			
		}

		##
		$p = lang_python_parser::get_parser();

		$l = 0;

		if (!strlen($code)) { 
			return; 
		}

		try {

			$t = lang_python_tokenize::__tokenize__($code,$endmarker);	

			$a = count($t);

			//if (!$endmarker) {
			$p->reset();
			//}
						
			$c = 0;

			while ($c < $a) {
				$g = @$k;
				$k = $t[$c];
				
				
				$p->eat($k->name,$k->value);							
				$c++;
			}

			if ($endmarker) {
				$p->eat_eof();
			}

		} catch (Exception $e) {
			
			echo '<xmp style="padding:8px;background:#ddd;border:1px solid #ccc;color:#333;">';
			echo '  File "'.$file.'", line '.$k->row."\n";
			echo '    '.static::get_code_line($code,$k->row)."\n";
			echo '    '.'^'."\n";			
			echo $e->getMessage();
			
			/*
			switch($k->name) {
				case "NAME": echo "NameError: name '{$k->value->name}' is not defined";break;				
				case "INDENT": echo 'IndentationError: unexpected indent';break;				
				default: echo 'SyntaxError: invalid syntax';break;				
			}	
			*/
			
			#echo "\n--\n".$e->getMessage();
			#echo "\n--\n";var_dump($g,$k);
							
			echo '</xmp>';
		}
		
		##
		return lang_python_phpc::buffer();
	}
		
	public static function get_code_line($code,$row) {
		$code = explode("\n",$code);
		return trim($code[$row-1]);		
	}
	
}
