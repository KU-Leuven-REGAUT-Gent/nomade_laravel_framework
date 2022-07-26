#!/usr/bin/env python3

############################################################################
## Webservices installation script                                        ##
## Author: Frederic Depuydt                                               ##
## Mail: frederic.depuydt@outlook.com                                     ##
##                                                                        ##
## Executing this script requires the 'depuydt' python libraries          ##
## https://github.com/fredericdepuydt/python-libraries                    ##
##                                                                        ##
############################################################################
import os
import sys

path = os.popen("cd /usr/local/lib/python3.?/dist-packages/ && pwd").read().rstrip()
sys.path.append(path + "/depuydt/src/")
## INCLUDES
from depuydt import docker

## Installing Laravel and all dependencies
docker.Compose.run("--rm", "composer", "dump-autoload");