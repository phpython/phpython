<?php

##
require_once __DIR__.'/python.eval.php';

##
class lang_python_exec {
		
	##
	public static function __exec__($file,$endmarker=true) {
	
		##
		$code = file_get_contents($file);
				
		##
		$phpc = lang_python_eval::__eval__($code,$file,$endmarker);
		
		##
		echo '<xmp style="padding:5px;background:#f2f2f2;border:1px solid #ccc">';
		echo $code;
		echo '</xmp>';
		
		##
		echo '<xmp style="padding:5px;background:#f2f2f2;border:1px solid #ccc">';
		echo $phpc;
		echo '</xmp>';
				
		##
		$exec = __DIR__.'/'.md5($file).'.php';
		
		##
		file_put_contents($exec, "<?php\n".$phpc);
		
		##
		echo '<xmp style="padding:5px;border:1px solid #f2f2f2">';
		try {
			include($exec);
		} catch (Exception $exception) {
			echo $exception->getMessage();			
		}
		echo '</xmp>';		
	}
	
}