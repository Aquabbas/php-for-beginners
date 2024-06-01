#!/bin/sh
# Create session directory if it doesn't exist
mkdir -p /var/www/html/sessions
chown -R www-data:www-data /var/www/html/sessions

# Execute the original CMD
exec "$@"
