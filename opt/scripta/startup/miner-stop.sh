#!/bin/sh
echo `date +"%Y-%m-%d %T"`" stopping sgminer"
sudo /usr/bin/screen -S sgminer -X quit
