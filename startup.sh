#!/bin/bash

# Azure App Service runs init_container.sh FIRST, then calls this startup script.
# Instead of trying to sed an unknown Nginx template, we write a complete config.

# Write a complete Nginx config for Laravel
cat > /etc/nginx/sites-available/default << 'NGINX_CONF'
server {
    #proxy_cache off;
    listen 8080;
    listen [::]:8080;
    root /home/site/wwwroot/public;
    index index.php index.html index.htm;
    server_name _;
    port_in_redirect off;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ [^/]\.php(/|$) {
        fastcgi_split_path_info ^(.+?\.php)(/.*)$;
        fastcgi_pass 127.0.0.1:9000;
        include fastcgi_params;
        fastcgi_param HTTP_PROXY "";
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_param PATH_INFO $fastcgi_path_info;
    }
}
NGINX_CONF

# Reload Nginx with the new configuration
service nginx reload

# Ensure Laravel storage directories exist and are writable
cd /home/site/wwwroot
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p storage/framework/cache/data
mkdir -p storage/logs
mkdir -p bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Clear any stale caches
php artisan config:clear 2>/dev/null
php artisan route:clear 2>/dev/null
php artisan view:clear 2>/dev/null
php artisan cache:clear 2>/dev/null
