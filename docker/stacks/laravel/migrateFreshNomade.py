#!/usr/bin/env python3

############################################################################
## Webservices migrating script                                           ##
## Author: Dimitri De Schuyter                                            ##
## Mail: dimitri.deschuyter@kuleuven.be                                   ##
##                                                                        ##
## Executing this script requires the 'depuydt' python libraries          ##
## https://github.com/DimitriDeSchuyter/python-libraries                  ##
##                                                                        ##
############################################################################
import os
import sys
path = os.popen("cd /usr/local/lib/python3.?/dist-packages/ && pwd").read().rstrip()
sys.path.append(path + "/depuydt/src/")
sys.path.append("/mnt/usb/lib")

## INCLUDES
from depuydt import environment,echo
# old php librarie
from command import command
from docker import docker

env = environment.Environment("~/.env")

## Clear and refill NOMADE database
clear = input('Are you sure to clear the NOMADe database on ' + env.get("DOMAINNAME")  + '?')
if clear[0].lower() == 'y' or clear[0].lower() == 'j':
    command.exec("cd 00.development/dev-nomade && python3 migrate-fresh.py && cd ../..");
    echo.notice("Migrate Fresh executed");
else:
    echo.notice("Migrate Fresh aborted");
