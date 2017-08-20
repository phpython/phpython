<?php
#require_once '../../python/python.build.php';
require_once '../../phpython.php';

phpython::config('DUMP_TOKEN',false);
phpython::config('EMBED_TAG','pre');

phpython::import('test3.py');


