#!/usr/bin/env bash

# Clone a repository by url
# $1 - working directory
# $2 - url of repository
# $3 - name of repository folder

##
cd $1
mkdir repository > /dev/null 2>&1
cd repository
git clone $2 $3
