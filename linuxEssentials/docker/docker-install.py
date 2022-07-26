#!/usr/bin/env python3

############################################################################
## Author: Frederic Depuydt                                               ##
## Mail: frederic.depuydt@outlook.com                                     ##
############################################################################

## INCLUDES
from depuydt import echo, command

echo.title("Installing Docker")
command.exec("curl -fsSL https://get.docker.com | sudo sh")