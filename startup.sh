#!/bin/bash

# Function to safely update Azure Nginx configuration for Laravel without breaking FastCGI/PHP-FPM
update_nginx() {
    for i in {1..20}; do
        sleep 2
        if [ -f /etc/nginx/sites-available/default ]; then
            # Update web root to Laravel's public directory
            sed -i 's|root /home/site/wwwroot;|root /home/site/wwwroot/public;|g' /etc/nginx/sites-available/default 2>/dev/null
            
            # Update try_files to pass requests to index.php
            sed -i 's|try_files $uri $uri/ =404;|try_files $uri $uri/ /index.php?$query_string;|g' /etc/nginx/sites-available/default 2>/dev/null

            # Reload Nginx with updated configuration
            service nginx reload 2>/dev/null || nginx -s reload 2>/dev/null
            echo "Nginx successfully updated for Laravel routing."
            break
        fi
    done
}

# Run update in background so it executes after init_container.sh initializes Nginx and FastCGI
update_nginx &

# Execute default container startup script
exec /opt/startup/init_container.sh
