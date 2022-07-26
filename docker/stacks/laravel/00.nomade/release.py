#!/usr/bin/env python3

############################################################################
## EDUCAT webservice release script                                       ##
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

from echo import echo
from docker import docker

## TITLE
echo.section("DOCKER DEPLOYING","NOMADE (Releasing)");

## Creating the volumes, networks and containers
docker.cp("./01.source/.","nomade-php:/app");