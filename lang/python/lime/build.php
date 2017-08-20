<?php
xdebug_disable();
ini_set('display_errors',true);
error_reporting(E_ALL);

echo '<pre>'."\n";
echo ' - Start build python parser with lime'."\n";

echo ' - import lime library'."\n";
require_once __DIR__.'/../../../lime/lime.php';

echo ' - generating code'."\n";
$code = parse_lime_grammar(__DIR__.'/python.lang');
echo ' - code generate size: '.strlen($code)."\n";

echo ' - save generated code'."\n";
$size = file_put_contents(__DIR__.'/../python.lang.php',"<?php \n".$code."\n?>");
echo ' - parser size code: '.$size."\n";
		
echo '</pre>'."\n";