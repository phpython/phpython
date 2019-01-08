# phpython
Use phpython to write python code in your php projects without using WSGI, CGI or FastCGI.

### Get started

Only two steps to change your mind

  1. create a simple php file and require the phpython lib
``` php
<?php
## file: index.php

require_once 'phpython/phpython.php';

phpython::import('demo.py');
```

  2. create a simple python file it is smart imported

``` python
## demo.py

print "Hello World"
```

PLEASE: Notify me any problem bianco@javanile.org
