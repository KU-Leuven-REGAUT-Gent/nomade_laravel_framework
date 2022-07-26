from depuydt import echo, environment, command
from depuydt.file import File
import os



# CREATING SYMBOLIC LINKS
env = environment.Environment("~/.env")
env.set("TZ","Europe/Brussels")
env.save()
os.environ["TZ"] =env.get("TZ")
#  os.environ["PORTAINER_PASSWORD_HASH"] = input('Portainer password: ')
echo.notice(os.environ["TZ"] )
# os.environ["PORTAINER_PASSWORD_HASH"] = command.exec("docker run --rm httpd:2.4-alpine htpasswd -nbB admin '" + os.environ["PORTAINER_PASSWORD_HASH"] + "' | cut -d \":\" -f 2") 
domainname = env.get("DOMAINNAME")

# CREATING DOCKER EXTERNAL NETWORKS
command.exec("docker network inspect web >/dev/null 2>&1 || docker network create --driver bridge web")
echo.notice("Network web created/exists")
command.exec("docker network inspect dns >/dev/null 2>&1 || docker network create --driver bridge dns")
echo.notice("Network dns created/exists")

# create internal list of all subdomains on the IP4 addres of the rpi
ipAddres = command.exec("hostname -I | awk '{print $1}'")
ipAddres = ipAddres.strip()
f = File("config/pihole/internal.list", "w+")
f.clear()
f.write(ipAddres + "    " + "nomade." + domainname + "\n")
f.write(ipAddres + "     " + "dev-nomade." + domainname + "\n")
f.write(ipAddres + "    " + "pihole." + domainname + "\n")
f.write(ipAddres + "    " + "traefik." + domainname + "\n")
f.write(ipAddres + "    " + "portainer." + domainname + "\n")
f.write(ipAddres + "    " + "phpmyadmin." + domainname + "\n")
f.close()

#create password for traefik
echo.notice("Enter a password for the user admin on the Traefik dashboard")
command.exec("htpasswd -c config/traefik/users.htpasswd admin" )
command.exec("sudo chmod 666 config/traefik/users.htpasswd")

# create user account for traefik dashboard
fTraefik = File("config/traefik/users.htpasswd", "r")
user = fTraefik.read()
fTraefik.close()
env = environment.Environment("~/.env")
env.set("traefikAuth",user.strip())
env.save()
os.environ["traefikAuth"] =env.get("traefikAuth")

echo.notice("Init done")