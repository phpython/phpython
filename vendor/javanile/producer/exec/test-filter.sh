#!/usr/bin/env bash

#
# $1 -
# $2 -
# $3 -
# $4 -

##
cd $1/repository/$2
rm -fr producer.log > /dev/null 2>&1

##
$1/vendor/bin/phpunit \
    --configuration phpunit.xml \
    --filter $4 \
    $3 | tail -n +7

##
[ -f producer.log ] && cat producer.log

