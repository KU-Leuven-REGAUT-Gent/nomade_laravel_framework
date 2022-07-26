############################################################################
## Author: Dimitri De Schuyter                                            ##
## Mail: dimitri.deschuyter@gmail.com                                     ##
############################################################################
import sys
import os
path = os.popen("cd /usr/local/lib/python3.?/dist-packages/ && pwd").read().rstrip()
sys.path.append(path + "/depuydt/src/")
from depuydt import command,environment,echo

echo.notice("install libnss3");
command.exec("sudo apt-get install libnss3-tools");

echo.notice("install mkcert");
command.exec("wget https://github.com/FiloSottile/mkcert/releases/download/v1.4.3/mkcert-v1.4.3-linux-arm");
command.exec("mv mkcert-v1.4.3-linux-arm mkcert");
command.exec("chmod a+x mkcert");
command.exec("sudo mv mkcert /usr/local/bin/");
command.exec("mkcert -install");


echo.notice("Create certificate for domain name");
env = environment.Environment("~/.env");
domainName=env.get("DOMAINNAME");
command.exec("mkcert -key-file key.pem -cert-file cert.pem " + domainName + " *." + domainName)
command.exec("mkdir /mnt/usb/certs")
command.exec("mv key.pem /mnt/usb/certs/")
command.exec("mv cert.pem /mnt/usb/certs/")