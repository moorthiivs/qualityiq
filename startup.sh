#!/bin/bash

# Debug: dump all nginx configs to a shared location (accessible from Kudu)
echo "=== Nginx Debug - $(date) ===" > /home/site/nginx_debug.log

# List ALL nginx config files
echo "--- All nginx config files ---" >> /home/site/nginx_debug.log
find /etc/nginx -type f 2>/dev/null >> /home/site/nginx_debug.log

# Dump current running nginx config
echo "--- Current nginx -T ---" >> /home/site/nginx_debug.log
nginx -T 2>&1 >> /home/site/nginx_debug.log

# ============================================================
# Strategy 1: Find and modify ALL existing Nginx config files
# ============================================================
for f in $(find /etc/nginx -type f \( -name "*.conf" -o -name "default" \) 2>/dev/null); do
    # Change root to Laravel's public directory
    sed -i 's|root /home/site/wwwroot;|root /home/site/wwwroot/public;|g' "$f"
    sed -i 's|root /home/site/wwwroot/public/public;|root /home/site/wwwroot/public;|g' "$f"

    # Replace existing try_files =404
    sed -i 's|try_files $uri $uri/ =404;|try_files $uri $uri/ /index.php?$query_string;|g' "$f"

    # If location / block exists but has NO try_files, inject one
    if grep -q "location / {" "$f" 2>/dev/null; then
        if ! grep -q "try_files" "$f" 2>/dev/null; then
            sed -i '/location \/ {/a\        try_files $uri $uri/ /index.php?$query_string;' "$f"
        fi
    fi
done

# ============================================================
# Strategy 2: Write complete config to common locations
# ============================================================
LARAVEL_CONF='server {
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

for target in /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default; do
    if [ -d "$(dirname "$target")" ]; then
        echo "$LARAVEL_CONF" > "$target" 2>/dev/null
    fi
done
ln -sf /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default 2>/dev/null

# Test and reload Nginx
echo "--- Config test result ---" >> /home/site/nginx_debug.log
nginx -t 2>&1 >> /home/site/nginx_debug.log
service nginx reload 2>&1 >> /home/site/nginx_debug.log

# Dump config AFTER reload
echo "--- AFTER reload nginx -T ---" >> /home/site/nginx_debug.log
nginx -T 2>&1 >> /home/site/nginx_debug.log

# ============================================================
# Laravel setup
# ============================================================
cd /home/site/wwwroot
mkdir -p storage/framework/sessions storage/framework/views storage/framework/cache/data storage/logs bootstrap/cache
chmod -R 775 storage bootstrap/cache

php artisan config:clear 2>/dev/null
php artisan route:clear 2>/dev/null
php artisan view:clear 2>/dev/null
php artisan cache:clear 2>/dev/null

echo "=== Startup complete ===" >> /home/site/nginx_debug.log
