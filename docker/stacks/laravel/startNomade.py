#!/usr/bin/env python3

############################################################################
## Webservices starting script                                            ##
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

## Start NOMADe framework
command.exec("cd 00.development/dev-nomade && python3 start.py && python3 migrate-fresh.py && cd ../..");
command.exec("cd 00.nomade && python3 start.py  && cd ..");