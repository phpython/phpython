#!/usr/bin/env bash

# Clone repository and create symbolic link
# $1 - working directory
# $2 - repository url
# $3 - project name
# $4 - package name

##
cd $1
mkdir repository > /dev/null 2>&1
cd repository
git clone $2 $3
cd ..
rm -fr vendor/$4
mv repository/$3 vendor/$4
ln -s ../vendor/$4 repository/$3
