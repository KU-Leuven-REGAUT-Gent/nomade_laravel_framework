#!/usr/bin/env python3

############################################################################
## Author: Frederic Depuydt                                               ##
## Mail: frederic.depuydt@outlook.com                                     ##
############################################################################

## INCLUDES
#!/usr/bin/env python3

############################################################################
## Author: Frederic Depuydt                                               ##
## Mail: frederic.depuydt@outlook.com                                     ##
############################################################################

## INCLUDES
from depuydt import echo
from depuydt.system import Link
import hashlib

# CREATING PASSWORDS
# GRAFANA



# CREATING SYMBOLIC LINKS
L = Link.create("./config", "~/docker/config/monitoring")
echo.notice("Link created '" + str(L) + "' pointing to '" + str(L.target()) + "'")
