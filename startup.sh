#!/bin/bash

# Azure App Service runs init_container.sh FIRST, then calls this startup script.
# Write Nginx config to ALL possible locations to ensure it takes effect.

LARAVEL_NGINX_CONF='server {
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
}'

# Diagnostic: log current Nginx state before changes
echo "=== BEFORE: Nginx config files ===" > /home/LogFiles/nginx_debug.log
find /etc/nginx -type f \( -name "*.conf" -o -name "default" \) 2>/dev/null >> /home/LogFiles/nginx_debug.log
echo "=== BEFORE: sites-available ===" >> /home/LogFiles/nginx_debug.log
ls -la /etc/nginx/sites-available/ 2>/dev/null >> /home/LogFiles/nginx_debug.log
echo "=== BEFORE: sites-enabled ===" >> /home/LogFiles/nginx_debug.log
ls -la /etc/nginx/sites-enabled/ 2>/dev/null >> /home/LogFiles/nginx_debug.log
echo "=== BEFORE: conf.d ===" >> /home/LogFiles/nginx_debug.log
ls -la /etc/nginx/conf.d/ 2>/dev/null >> /home/LogFiles/nginx_debug.log
echo "=== BEFORE: Full Nginx config dump ===" >> /home/LogFiles/nginx_debug.log
nginx -T 2>&1 >> /home/LogFiles/nginx_debug.log

# Write config to ALL possible Nginx config locations
echo "$LARAVEL_NGINX_CONF" > /etc/nginx/sites-available/default 2>/dev/null
echo "$LARAVEL_NGINX_CONF" > /etc/nginx/sites-enabled/default 2>/dev/null
ln -sf /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default 2>/dev/null

# Also try conf.d if it exists
if [ -d /etc/nginx/conf.d ]; then
    echo "$LARAVEL_NGINX_CONF" > /etc/nginx/conf.d/default.conf 2>/dev/null
fi

# Test and reload Nginx
echo "=== Nginx config test ===" >> /home/LogFiles/nginx_debug.log
nginx -t 2>&1 >> /home/LogFiles/nginx_debug.log
service nginx reload 2>&1 >> /home/LogFiles/nginx_debug.log

echo "=== AFTER: Full Nginx config dump ===" >> /home/LogFiles/nginx_debug.log
nginx -T 2>&1 >> /home/LogFiles/nginx_debug.log

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

echo "=== Startup complete ===" >> /home/LogFiles/nginx_debug.log
