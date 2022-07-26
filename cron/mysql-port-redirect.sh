#!/bin/sh

############################################################################
## Author: Frederic Depuydt                                               ##
## Mail: frederic.depuydt@outlook.com                                     ##
############################################################################

# Executed at every system reboot
sudo iptables -t nat -A PREROUTING -p tcp --dport 20100 -j REDIRECT --to 3306
sudo iptables -t nat -A OUTPUT -p tcp --dport 20100 -j REDIRECT --to 3306
