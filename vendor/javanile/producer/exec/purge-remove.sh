#!/usr/bin/env bash

# Remove via composer a package
# $1 - working directory
# $2 - complete package name

##
cd $1
composer remove $2
