#!/bin/bash

# Update Nginx document root to public folder
sed -i 's|root /home/site/wwwroot;|root /home/site/wwwroot/public;|g' /etc/nginx/sites-available/default 2>/dev/null

# Update try_files to route requests to index.php (enabling Laravel routing)
sed -i 's|try_files $uri $uri/ =404;|try_files $uri $uri/ /index.php?$query_string;|g' /etc/nginx/sites-available/default 2>/dev/null

# Reload Nginx configuration
service nginx reload 2>/dev/null || true

# Execute default container startup
exec /opt/startup/init_container.sh
