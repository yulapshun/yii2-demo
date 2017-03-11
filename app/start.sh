cd /app
composer install --prefer-source --no-interaction --no-progress
service php7.0-fpm start
nginx -g 'daemon off;'
