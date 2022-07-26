############################################################################
## Install file for local MariaDB                                         ##
## Author: Dimitri De Schuyter                                            ##
## Mail: dimitri.deschuyter@gmail.com                                     ##
############################################################################
import sys
import os
path = os.popen("cd /usr/local/lib/python3.?/dist-packages/ && pwd").read().rstrip()
sys.path.append(path + "/depuydt/src/")

from depuydt import command,environment,echo
command.exec("sudo apt-get update && sudo apt-get upgrade -y");
command.exec("sudo apt-get install -y mariadb-server");
echo.notice(" mysql_secure_installation");
os.system("sudo mysql_secure_installation");