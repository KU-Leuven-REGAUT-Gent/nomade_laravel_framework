#!/usr/bin/env python3

############################################################################
## Author: Frederic Depuydt                                               ##
## Mail: frederic.depuydt@outlook.com                                     ##
############################################################################
import sys
import os
os.system("sudo chown pi:root -R /mnt")
os.system("sudo chmod -R g+s /mnt")
exec(open("software.py").read())

exec(open("lib-bin-share.py").read())

exec(open("bash/append.py").read())
exec(open("env-variables.py").read())
import sys
import os
from os.path import exists

path = os.popen("cd /usr/local/lib/python3.?/dist-packages/ && pwd").read().rstrip()


## INCLUDES
sys.path.append(path + "/depuydt/src/")
from depuydt import echo
echo.section("Linux essentials - INSTALL", "Installing Docker and Docker-Compose")
exec(open("docker/docker-install.py").read())
exec(open("docker/docker-group.py").read())
exec(open("docker/docker-compose-install.py").read())

echo.section("Linux essentials - INSTALL", "Installing mkcert for self signed certificates")
exec(open("tls-key-generator.py").read());

echo.section("Linux essentials - INSTALL", "Installing MariaDB")
exec(open("mariadb.py").read());