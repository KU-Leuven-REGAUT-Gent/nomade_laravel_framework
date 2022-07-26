#!/usr/bin/env python3

############################################################################
## EDUCAT (Development Branch) webservice installation script             ##
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
sys.path.append("/mnt/usb/lib")

from depuydt import echo, environment, command

from echo import echo
from docker import docker

## TITLE
echo.section("DOCKER DEPLOYING","NOMADE (Development Branch) (Installing)");

## Checking external networks
docker.network.exists("web");

# load variables
env = environment.Environment("~/.env")
os.environ["DB_NOMADE_DATABASE"] = env.get("DB_NOMADE_DATABASE")
os.environ["DB_NOMADE_USERNAME"] = env.get("DB_NOMADE_USERNAME")
os.environ["DB_NOMADE_PASSWORD"] = env.get("DB_NOMADE_PASSWORD")


echo.notice(os.environ["DB_NOMADE_USERNAME"])
echo.notice(os.environ["DB_NOMADE_PASSWORD"])

## Creating the volumes, networks and containers
docker.compose.up("--build --no-start --force-recreate nginx php");
docker.cp("./../../01.source/storage/.","dev-nomade-php:/app/storage");
