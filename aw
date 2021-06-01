#!/bin/sh

# dependency: community/arch-wiki-docs

dir=/usr/share/doc/arch-wiki/html/en/
page=$(ls $dir | sed 's/.html//g' | dmenu -i -l 42)

[ -z $page ] && exit

page=$(echo $page | sed 's/$/.html/')
qutebrowser $dir$page
