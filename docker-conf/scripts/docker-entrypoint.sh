#!/bin/bash

# START SERVICES
/etc/init.d/nginx restart
/etc/init.d/php8.1-fpm restart

# # START sphinx
# indexer --all --rotate
# searchd

# START octane swoole
/bin/php /app/artisan config:cache
/bin/php /app/artisan route:cache
/bin/php /app/artisan view:cache

/bin/php /app/artisan octane:start -q --server=swoole --port=8000

# KEEP CONTAINER ALIVE
tail -f /dev/null