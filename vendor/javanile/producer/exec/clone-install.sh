#!/usr/bin/env bash

##
cd $1
composer require $2
rm -fr vendor/$2
mv repository/$3 vendor/$2
ln -s ../vendor/$2 repository/$3

