#!/bin/bash
cgminer=`ps -ef |grep sgminer |grep -v grep`
if [ "$cgminer" == "" ]
        then
        echo `date +"%Y-%m-%d %T"`" sgminer is not running, starting now..."
/usr/bin/screen -dmS sgminer /opt/scripta/bin/sgminer -c /opt/scripta/etc/miner.conf --api-listen
fi
