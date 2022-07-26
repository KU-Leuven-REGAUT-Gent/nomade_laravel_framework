#!/usr/bin/env python3

############################################################################
## Author: Frederic Depuydt                                               ##
## Mail: frederic.depuydt@outlook.com                                     ##
############################################################################

## INCLUDES
from depuydt.mail.smtp import SMTP

SMTP.set_login('email@domain', '<PASSWORD>')
SMTP.set_server('smtp.gmail.com', 587)

recipients = ['email@domain']

mail = SMTP("Myriade Server", recipients)
mail.send("Myriade Server Restarted", "Server restart notification")
