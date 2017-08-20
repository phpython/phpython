#!/usr/bin/env bash

#
# $1 -
# $2 -

##
cd $1
$1/vendor/bin/phpunit \
    --configuration phpunit.xml \
    --bootstrap $1/vendor/autoload.php \
    --testdox \
    tests/$2
