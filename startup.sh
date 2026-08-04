#!/bin/bash

# Azure App Service runs init_container.sh FIRST, then calls this startup script.
# We only need to modify Nginx config for Laravel routing and reload.

# Point Nginx root to Laravel's public directory
sed -i 's|root /home/site/wwwroot;|root /home/site/wwwroot/public;|g' /etc/nginx/sites-available/default

# Prevent double /public/public if already correct
sed -i 's|root /home/site/wwwroot/public/public;|root /home/site/wwwroot/public;|g' /etc/nginx/sites-available/default

# Route all non-file requests through Laravel's front controller
sed -i 's|try_files $uri $uri/ =404;|try_files $uri $uri/ /index.php?$query_string;|g' /etc/nginx/sites-available/default

# Reload Nginx with updated configuration
service nginx reload
