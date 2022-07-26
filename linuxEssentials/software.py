#!/usr/bin/env python3

############################################################################
## Author: Dimitri De Schuyter                                            ##
## Mail: dimitri.deschuyter@gmail.com                                     ##
############################################################################

import sys
import os
from pprint import pprint

## TITLE
print("Installation Part 01", "Installing software and tools");

## install python tools
os.system("sudo apt-get install python3-setuptools")
os.system("sudo apt-get install python3-pip")
os.system("sudo apt-get install python-influxdb")

## installing apache2 utils for htpasswd password generation in essentials
os.system("sudo apt-get install -y apache2-utils")