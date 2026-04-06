#!/bin/sh
set -eu

APP_ROOT="/var/www/html"
DISK_PATH="${RENDER_DISK_PATH:-}"

mkdir -p "$APP_ROOT/storage/framework/cache" \
    "$APP_ROOT/storage/framework/sessions" \
    "$APP_ROOT/storage/framework/views" \
    "$APP_ROOT/storage/logs" \
    "$APP_ROOT/bootstrap/cache"

if [ -n "$DISK_PATH" ]; then
    mkdir -p "$DISK_PATH/upload"

    if [ -L "$APP_ROOT/public/upload" ] || [ -d "$APP_ROOT/public/upload" ]; then
        rm -rf "$APP_ROOT/public/upload"
    fi

    ln -sfn "$DISK_PATH/upload" "$APP_ROOT/public/upload"
fi

chown -R www-data:www-data "$APP_ROOT/storage" "$APP_ROOT/bootstrap/cache"

php artisan config:clear >/dev/null 2>&1 || true
php artisan cache:clear >/dev/null 2>&1 || true
php artisan view:clear >/dev/null 2>&1 || true

exec "$@"
