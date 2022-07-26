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



L = Link.create("/mnt/usb/docker/config/essentials", "/mnt/usb/docker/stacks/essentials/config")
echo.notice("Link created '" + str(L) + "' pointing to '" + str(L.target()) + "'")
