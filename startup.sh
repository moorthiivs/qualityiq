#!/bin/bash

# Function to apply Nginx configuration updates after init_container starts Nginx
update_nginx() {
    # Retry loop to wait for init_container.sh to create and start Nginx
    for i in {1..15}; do
        sleep 2
        if [ -f /etc/nginx/sites-available/default ]; then
            if [ -f /home/site/wwwroot/default ]; then
                cp /home/site/wwwroot/default /etc/nginx/sites-available/default
            fi
            sed -i 's|root /home/site/wwwroot;|root /home/site/wwwroot/public;|g' /etc/nginx/sites-available/default 2>/dev/null
            sed -i 's|try_files $uri $uri/ =404;|try_files $uri $uri/ /index.php?$query_string;|g' /etc/nginx/sites-available/default 2>/dev/null
            service nginx reload 2>/dev/null || nginx -s reload 2>/dev/null
            echo "Nginx successfully updated and reloaded for Laravel routing."
            break
        fi
    done
}

# Run update in background so it executes after init_container.sh starts services
update_nginx &

# Execute default container startup script
exec /opt/startup/init_container.sh
