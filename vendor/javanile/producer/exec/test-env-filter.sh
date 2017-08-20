#!/usr/bin/env bash

#
# $1 -
# $2 -
# $3 -

##
cd $1
rm -fr producer.log > /dev/null 2>&1

##
$1/vendor/bin/phpunit \
    --configuration phpunit.xml \
    --filter $3 \
    tests/$2 | tail -n +7

##
[ -f producer.log ] && cat producer.log
