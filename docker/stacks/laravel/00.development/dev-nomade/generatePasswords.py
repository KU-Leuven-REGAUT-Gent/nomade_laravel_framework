#!/usr/bin/env python3

############################################################################
## NOMADe (Development Branch)  webservice starting script                ##
## Author: Frederic Depuydt                                               ##
## Mail: frederic.depuydt@outlook.com                                     ##
##                                                                        ##
## Executing this script requires the 'depuydt' python libraries          ##
## https://github.com/fredericdepuydt/python-libraries                    ##
##                                                                        ##
############################################################################

## INCLUDES
from depuydt import echo
from depuydt import command
from depuydt import docker

## TITLE
echo.section("DOCKER DEPLOYING","NOMADE (Generating Passwords)");

## Creating the volumes, networks and containers

docker.Compose.exec(None, "php", "sh -c 'php artisan db:seed --class=GeneratePasswords'");