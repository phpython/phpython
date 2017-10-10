<?php

##
require_once __DIR__.'/python.token.php';
require_once __DIR__.'/python.literal.php';

##
class lang_python_tokenize {
	
	public static function __tokenize__($code,$endmarker=true) {		

		$c = rtrim($code);	
		
		$o = array();	
		
		$i = 0;
			
		$l = 1;
		
		$k = 1;

		$z = 0;
		
		$g = array();
		
		$f = true;
		
		do {
			$v = lang_python_tokenize::newline($c);
			if($v>0){
				$c=substr($c,$v);			
				$l++;
				$k=1;
			}		
		} while($v>0);
				
		while (strlen($c) && $z < 100) {

			$n = 0;	
			
			do {
				$v = lang_python_tokenize::newline($c);
				if ($v > 0) {
					$c = substr($c,$v);
					$n+= $v;			
					$l++;
					$k=1;
				}			
			} while ($v>0);

			if ($n > 0) {
				$o[] = new lang_python_token($l,$k,'NEWLINE');
				$f = true;
			} 
			
			$w = lang_python_tokenize::whitespace($c);
						
			if ($w > 0) {
				$s = substr($c, 0, $w);
				$c = substr($c, $w);
			} else {
				$s = '';
			}

			if ($f) {
				$e = lang_python_tokenize::compute_space($s);
				if ($e != $i) {				
					if ($e > $i) {
						$o[] = new lang_python_token($l,$k,'INDENT');
						$g[] = $e;
						$i = $e;
					} else if ($e==0 || in_array($e,$g)) {						
						do {
							$h = array_pop($g);
							if ($h==$e) {break;}
							$o[] = new lang_python_token($l,$k,'DEDENT');
						} while (count($g)>0);	
						if ($e>0) {
							$g[] = $e;
						}
						$i = $e;
					} else {
						$o[] = new lang_python_token($l,$k,'FAIL');							
					}
				}
			}
						
			$t = lang_python_tokenize::next($l,$k,$c);				

			$f = false;
			
			$o[] = $t;

			$c = substr($c,$t->len);		
			
			$z++;
		}
	
		$o[] = new lang_python_token($l,$k,'NEWLINE');
		
		while (count($g)>0) {
			$o[] = new lang_python_token($l,$k,'DEDENT');
			$h = array_pop($g);
		}
		
		if ($endmarker) {
			$o[] = new lang_python_token($l,$k,'ENDMARKER');
		}
		
		if (lang_python_config::get('debug')) {
			echo '<xmp style="padding:5px;background:#f2f2f2;border:1px solid #ccc;">';
			foreach($o as $t) {
				echo "$t->name: ".$t->getValue()."\n";
			}
			echo '</xmp>';
		}
		
		return $o;
	}

	##
	public static function newline($c) {
	   $l = 0;
	   $k = false;		
	   if(isset($c[$l])){if(ord($c[$l])==13){$l++;$k=true;}}			
	   if(isset($c[$l])){if(ord($c[$l])==10){$l++;$k=true;}}
	   if($k){return $l;}
	   if (re('/(^[ \t]+)/',$c,$s)) {
		   $l = strlen($s[0]);	
		   $k = false;
		   if(isset($c[$l])){if(ord($c[$l])==13){$l++;$k=true;}}
		   if(isset($c[$l])){if(ord($c[$l])==10){$l++;$k=true;}}
		   if($k){return $l;}	
	   } 	
	   return 0;
	}

	##
	public static function whitespace($c) {
		$l = 0;
		if (re('/(^[ \t]+)/',$c,$s)) {
			$l = strlen($s[0]);	
			return $l;
		}
	   return 0;	
	}

	##
	public static function next($l,$k,$c) {		
		$h = array(
			'/^,/'		=> "COMMA",
			'/^\./'		=> "DOT",
			'/^:/'		=> "COLON",
			'/^;/'		=> "SEMICOLON",
			'/^==/'		=> "EQUAL",
			'/^=/'		=> "ASSIGN",		
			'/^\+/'		=> 'PLUS',
			'/^\-/'		=> 'MINUS',
			'/^\*/'		=> 'STAR',
			'/^%/'		=> "MOD",
			'/^>/'		=> "GREAT",
			'/^</'		=> "LESS",
			'/^>=/'		=> "GREATEQUAL",
			'/^<=/'		=> "LESSEQUAL",
			'/^\(/'		=> "RBO",
			'/^\)/'		=> "RBC",
			'/^\[/'		=> "SBO",
			'/^\]/'		=> "SBC",
			'/^{/'		=> "BO",
			'/^}/'		=> "BC",
			'/^print/'	=> "PRINT",
			'/^import/'	=> "IMPORT",
			'/^from/'	=> "FROM",
			'/^class/'  => "CLASS",
			'/^def/'	=> "DEF",
			'/^return/'	=> "RETURN", 
			'/^while/'	=> "WHILE",
			'/^if/'		=> 'IF',
			'/^else/'	=> 'ELSE',
			'/^elif/'	=> 'ELIF',
			'/^True/'	=> 'TRUE',
			'/^False/'	=> 'FALSE',
			'/^None/'	=> 'NONE',
			'/^\.\.\./'	=> 'TRIEPLEDOT',
		);	

		foreach($h as $r=>$t) {
			if (re($r,$c,$s)) {
				return new lang_python_token($l,$k,$t,$s[0],strlen($s[0]));
			}
		}

		if (re('|^#.*|',$c,$s)) {					
			return python_parse_comment($s[0]);	
		} else if (re('/^[0-9]+(\.[0-9]*)?/',$c,$s)) {
			return new lang_python_token($l,$k,"NUMBER",(int)$s[0],strlen($s[0]));
		} else if (re('/^"""(.*)"""/',$c,$s)) {
			return new lang_python_token($l,$k,"STRING",$s[1],strlen($s[0]));
				
		} else if (re('/^"([^"\\\\]*(?:\\\\.[^"\\\\]*)*)"/',$c,$s)) {
			return new lang_python_token($l,$k,"STRING",(string)$s[1],strlen($s[0]));
			
		} else if (re("/^'([^'\\\\]*(?:\\\\.[^'\\\\]*)*)'/",$c,$s)) {
			return new lang_python_token($l,$k,"STRING",(string)$s[1],strlen($s[0]));
			
		} else if (re('|^[A-Za-z_][A-Za-z0-1_]*|',$c,$s)) {			
			return new lang_python_token($l,$k,"NAME",new lang_python_literal($s[0]),strlen($s[0]));				
		} 					
		return new lang_python_token($l,$k,'FAIL');
	}
	
	
	public static function compute_space($s) {
		$l = 0;
		for($i=0;$i<strlen($s);$i++) {
			$c = $s[$i];
			if ($c==" ") {
				$l=$l+1;
			} else if ($c=="\t") {
				$l=$l+8;				
			}			
		}
		return $l;
	}
		
		

}