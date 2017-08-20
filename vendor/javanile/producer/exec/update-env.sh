#!/usr/bin/env bash

#
# $1 -

##
cd $1
git add .
git add *
git config push.default simple
git pull
