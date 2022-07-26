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
import sys, os
path = os.popen("cd /usr/local/lib/python3.?/dist-packages/ && pwd").read().rstrip()
sys.path.append(path + "/depuydt/src/")
sys.path.append("/mnt/usb/lib")

## INCLUDES
from depuydt import environment
from echo import echo
from command import command
from docker import docker

## TITLE
echo.section("DOCKER DEPLOYING","NOMADE (Development Branch) (Migrating Fresh)");
# load variables
env = environment.Environment("~/.env")
os.environ["DB_NOMADE_DATABASE"] = env.get("DB_NOMADE_DATABASE")
os.environ["DB_NOMADE_USERNAME"] = env.get("DB_NOMADE_USERNAME")
os.environ["DB_NOMADE_PASSWORD"] = env.get("DB_NOMADE_PASSWORD")


docker.compose.run("--rm", "php", "sh -c 'php artisan config:cache'"); # needed to reload environment variables inside container
# clear database and create tables
docker.compose.run("--rm", "php", "sh -c 'php artisan migrate:fresh'"); 
# fill tables with sql dumps and seed files
docker.compose.run("--rm", "php", "sh -c 'php artisan db:seed'"); 