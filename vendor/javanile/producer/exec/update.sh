#!/usr/bin/env bash

##
cd $1/repository/$2
git add .
git add *
git config push.default simple
git pull
