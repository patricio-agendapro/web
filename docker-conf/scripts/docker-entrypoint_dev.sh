#!/bin/bash

# START SERVICES
/etc/init.d/nginx restart
/etc/init.d/php8.1-fpm restart

# START sphinx
indexer --all --rotate
searchd

# KEEP CONTAINER ALIVE
tail -f /dev/null