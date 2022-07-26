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
import sys
sys.path.append("/mnt/usb/lib")
## INCLUDES

from command import command
from docker import docker
from echo import echo
# ## Installing Laravel and all dependencies



# Create env files.
command.exec("touch .env");
command.exec("cp -r 01.source/.env.example 01.source/.env")
command.exec("mkdir 01.source/storage")
command.exec("mkdir 01.source/storage/app && mkdir 01.source/storage/framework && mkdir 01.source/storage/logs")
command.exec("mkdir 01.source/storage/framework/cache && mkdir 01.source/storage/framework/sessions && mkdir 01.source/storage/framework/views")


# Install libseccomp2_2.5.1 to solve problem with building the images
command.exec("wget https://ftp.debian.org/debian/pool/main/libs/libseccomp/libseccomp2_2.5.1-1~bpo10+1_armhf.deb")
command.exec("sudo dpkg -i libseccomp2_2.5.1-1~bpo10+1_armhf.deb")
command.exec("sudo rm -rf libseccomp2_2.5.1-1~bpo10+1_armhf.deb*")

# # build the needed images
docker.compose.up("--build --no-start");

echo.notice("The installation of laravel will take some time.")
docker.compose.run("--rm", "composer", "rm -rf composer.lock vendor node_modules");
docker.compose.run("--rm", "composer", "update --no-scripts");
docker.compose.run("--rm", "composer", "dump-autoload");
docker.compose.run("--rm", "composer", "update");
docker.compose.run("--rm", "composer", "chmod -R 777 storage");

docker.compose.run("--rm", "php", "sh -c 'php artisan clear-compiled'");
docker.compose.run("--rm", "php", "sh -c 'php artisan key:generate'"); 

# #docker.compose.run("--rm", "php", "sh -c 'php artisan ui bootstrap --auth'");

docker.compose.run("--rm", "node", "rm -rf package-lock.json node_modules");
docker.compose.run("--rm", "node", "npm install");
docker.compose.run("--rm ", "node", "npm run dev");
