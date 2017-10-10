<?php
/**
 *
 */

error_reporting(E_ALL);
ini_set('display_errors', true);

echo '===> Start build python parser with lime'."\n";

echo ' (!) Import lime library'."\n";
require_once __DIR__.'/../lime/lime.php';

echo ' (!) Generating code'."\n";
$code = parse_lime_grammar(__DIR__.'/python.lang');
echo ' (!) Code generate size: '.strlen($code)."\n";

echo ' (!) Save generated code'."\n";
$size = file_put_contents(__DIR__.'/../src/Lang/Parser.php',"<?php namespace Phpython\\Lang;\n".$code."\n?>");
echo ' (!) Parser size code: '.$size."\n";
