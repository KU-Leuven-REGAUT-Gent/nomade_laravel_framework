sudo iptables -t nat -A PREROUTING -p tcp --dport 20100 -j REDIRECT --to 3306
sudo iptables -t nat -A OUTPUT -p tcp --dport 20100 -j REDIRECT --to 3306

sudo iptables -t nat -L -n -v
