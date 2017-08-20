<?php
#require_once '../../python/python.build.php';
require_once '../../phpython.php';

#phpython::config('DUMP_TOKEN',true);
#phpython::config('EMBED_TAG','pre');

phpython::import('Person.py');

$p = new Person();

var_dump($p);


