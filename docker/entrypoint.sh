#!/bin/sh

# Exit on error
set -e

# Run migrations (optional, can be disabled if handled elsewhere)
# echo "Running migrations..."
# php artisan migrate --force

# Cache configuration, routes, and views
echo "Caching configuration..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start Supervisord
echo "Starting Supervisord..."
exec "$@"
