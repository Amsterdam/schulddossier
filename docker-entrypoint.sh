#!/usr/bin/env bash

echo 'Start docker-entrypoint.sh'

set -u

#composer install --no-interaction --no-suggest --prefer-dist
php bin/console cache:warmup --env=production
php bin/console cache:warmup --env=acceptance
php bin/console doctrine:migrations:migrate --no-interaction
chown -R www-data:www-data var

cp docker/nginx/nginx.conf /etc/nginx/nginx.conf
cp docker/nginx/vhost.conf /etc/nginx/conf.d/vhost.conf

nginx
php-fpm -F
