<?php
require_once("phpython.lib.php");

$t = microtime(true);

phpython_build();

phpython_start();

phpython_index(); 

echo '<hr>';
echo microtime(true) - $t . " sec.";

