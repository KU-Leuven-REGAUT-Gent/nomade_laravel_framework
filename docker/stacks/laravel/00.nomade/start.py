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
import os
import sys

path = os.popen("cd /usr/local/lib/python3.?/dist-packages/ && pwd").read().rstrip()
sys.path.append(path + "/depuydt/src/")
sys.path.append("/mnt/usb/lib")

from depuydt import echo, environment, command


## INCLUDES

from echo import echo
from docker import docker

## TITLE
echo.section("DOCKER DEPLOYING","NOMADE (Starting)");

# load variables
env = environment.Environment("~/.env")

os.environ["DB_NOMADE_DATABASE"] = env.get("DB_NOMADE_DATABASE")
os.environ["DB_NOMADE_USERNAME"] = env.get("DB_NOMADE_USERNAME")
os.environ["DB_NOMADE_PASSWORD"] = env.get("DB_NOMADE_PASSWORD")

## Creating the volumes, networks and containers
docker.compose.up("-d nginx php");
docker.compose.exec(None, "php", "chmod -R 777 /app/storage");
docker.compose.run("--rm", "php", "sh -c 'php artisan config:cache'"); # needed to reload environment variables inside container