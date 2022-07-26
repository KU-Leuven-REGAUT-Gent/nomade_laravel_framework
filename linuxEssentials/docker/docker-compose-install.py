#!/usr/bin/env python3

############################################################################
## Author: Frederic Depuydt                                               ##
## Mail: frederic.depuydt@outlook.com                                     ##
############################################################################

## INCLUDES
import sys
import os
path = os.popen("cd /usr/local/lib/python3.?/dist-packages/ && pwd").read().rstrip()
sys.path.append(path + "/depuydt/src/")
from depuydt import echo, command

echo.comment("Installing Docker-Compose")
system = str(command.exec("uname -s")).rstrip()
arch = str(command.exec("uname -m")).rstrip()
echo.notice(arch)
if arch == "armv7l":
    command.exec("sudo curl -L \"https://github.com/javabean/arm-compose/releases/download/1.23.2/docker-compose-Linux-armv7l\" -o /usr/local/bin/docker-compose")
elif arch == "x86_64":
    command.exec("sudo curl -L \"https://github.com/docker/compose/releases/download/1.24.1/docker-compose-" + system + "-" + arch + "\" -o /usr/local/bin/docker-compose")
else:
    echo.error("Architecture " + arch + "currently unsupported.")
    exit()

command.exec("sudo chmod 755 /usr/local/bin/docker-compose")

user = os.getlogin()
command.exec("sudo chown " +  str(user) + " /var/run/docker.sock")