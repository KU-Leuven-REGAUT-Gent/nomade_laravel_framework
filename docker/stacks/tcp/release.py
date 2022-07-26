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

## INCLUDES
from depuydt import echo
from depuydt import docker

## TITLE
echo.section("DOCKER DEPLOYING","NOMADe tcp  (Copy)");

## Creating the volumes, networks and containers
docker.cp("/mnt/usb/docker/stacks/tcp/code","tcp-nomade:/var/www/html");
echo.notice("done")