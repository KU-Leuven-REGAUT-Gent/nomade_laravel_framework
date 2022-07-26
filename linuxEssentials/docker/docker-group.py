#!/usr/bin/env python3

############################################################################
## Author: Frederic Depuydt                                               ##
## Mail: frederic.depuydt@outlook.com                                     ##
############################################################################

## INCLUDES
import os
import sys

path = os.popen("cd /usr/local/lib/python3.?/dist-packages/ && pwd").read().rstrip()
sys.path.append(path + "/depuydt/src/")

from depuydt import echo, command



user = os.getlogin()

echo.title("Adding current user to the docker group")
command.exec("groupadd docker")
command.exec("sudo usermod -aG docker " + str(user))
command.exec("grep 'docker' /etc/group")
# command.exec("su - " + str(user))