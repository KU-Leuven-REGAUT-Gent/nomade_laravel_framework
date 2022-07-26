#!/usr/bin/env python3

############################################################################
## NOMADe webservice starting script                                      ##
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
echo.section("DOCKER DEPLOYING","Documentation (Starting)");

## Checking external networks
docker.Network.exists("web");

## Creating the volumes, networks and containers
docker.Compose.up("-d nginx");