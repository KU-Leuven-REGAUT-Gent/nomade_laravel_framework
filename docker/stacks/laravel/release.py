#!/usr/bin/env python3

############################################################################
## Webservices release script                                             ##
## Author: Frederic Depuydt                                               ##
## Mail: frederic.depuydt@outlook.com                                     ##
##                                                                        ##
## Executing this script requires the 'depuydt' python libraries          ##
## https://github.com/fredericdepuydt/python-libraries                    ##
##                                                                        ##
############################################################################
import sys
sys.path.append("/mnt/usb/lib")

## INCLUDES
from command import command

## Creating the volumes, networks and containers
command.exec("cd 00.nomade && python3 release.py && cd ..");

