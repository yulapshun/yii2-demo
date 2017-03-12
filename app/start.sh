cd /var/www/app
composer install --prefer-source --no-interaction --no-progress
./yii migrate/up --interactive=0
chmod 777 runtime
service php7.0-fpm start
nginx -g 'daemon off;'
