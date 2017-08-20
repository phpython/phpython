#!/usr/bin/env bash

##
cd $1/repository/$2
$1/vendor/bin/phpunit \
    --configuration phpunit.xml \
    --bootstrap $1/vendor/autoload.php \
    --testdox \
    $3
