#!/bin/bash
sudo /usr/sbin/ntpdate -u pool.ntp.org
sudo /usr/bin/screen -dmS sgminer /opt/scripta/bin/sgminer -c /opt/scripta/etc/miner.conf
sleep 1
echo `pidof sgminer` > /opt/scripta/var/sgminer.pid


