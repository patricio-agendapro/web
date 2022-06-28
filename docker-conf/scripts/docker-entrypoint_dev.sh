#!/bin/bash

# START SERVICES
/etc/init.d/nginx restart
/etc/init.d/php8.1-fpm restart

# KEEP CONTAINER ALIVE
tail -f /dev/null