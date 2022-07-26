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
path = os.popen("cd /usr/local/lib/python3.?/dist-packages/ && pwd").read().rstrip();
sys.path.append(path + "/depuydt/src/");
sys.path.append("/mnt/usb/lib");

## INCLUDES
from depuydt import environment
# old php librarie
from command import command
from docker import docker

env = environment.Environment("~/.env");

os.environ["DB_NOMADE_DATABASE"] = env.require("DB_NOMADE_DATABASE");

os.environ["DB_NOMADE_USERNAME"] = input("DB_NOMADE_USERNAME: ");
env.set("DB_NOMADE_USERNAME",os.environ["DB_NOMADE_USERNAME"]);

env.set("DB_NOMADE_PASSWORD",input("DB_NOMADE_PASSWORD: "));
env.save();
os.environ["DB_NOMADE_PASSWORD"] = env.get("DB_NOMADE_PASSWORD");




# ## Install NOMADE framework
command.exec("cd 00.development/dev-nomade && python3 install.py && cd ../..");
command.exec("cd 00.nomade && python3 install.py && cd ..");