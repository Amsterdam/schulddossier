#!/usr/bin/env bash

echo 'Start docker-entrypoint.sh'
echo "Environment: $APP_ENV"

set -u

#echo "10.16.136.56 schuldhulp-ft.sociaal.amsterdam.nl" >> /etc/hosts
#echo "10.205.130.12 schuldhulp-ft.sociaal.amsterdam.nl" >> /etc/hosts # hent change 1
echo "10.204.22.40 schuldhulp-ft.sociaal.amsterdam.nl" >> /etc/hosts # hent change 2
#echo "10.16.130.3 schuldhulp.sociaal.amsterdam.nl" >> /etc/hosts
echo "10.204.22.39 schuldhulp.sociaal.amsterdam.nl" >> /etc/hosts
echo 'Dumping hosts file:'
cat /etc/hosts

composer run-script post-install-cmd

if [ "$APP_ENV" = "dev" ]
then
    composer install --no-interaction --no-suggest --prefer-dist
    # no cache:warmup needed for dev
elif [ "$APP_ENV" = "production" ]
then
    # composer install already executed in Dockerfile
    php bin/console cache:warmup --env=production
elif [ "$APP_ENV" = "acceptance" ]
then
    # composer install already executed in Dockerfile
    php bin/console cache:warmup --env=acceptance
fi

php bin/console doctrine:migrations:migrate --no-interaction

chown -R www-data:www-data var

rm /etc/nginx/conf.d/default.conf
cp docker/nginx/nginx.conf /etc/nginx/nginx.conf
cp docker/nginx/vhost-$APP_ENV.conf /etc/nginx/conf.d/vhost.conf

cp docker/nginx/localhost.crt /srv/localhost.crt
cp docker/nginx/localhost.key /srv/localhost.key

cp docker/php/extra-$APP_ENV.ini /usr/local/etc/php/conf.d/99-extra.ini

tail -f /srv/app/var/log/nginx-schulddossier_* &

touch /srv/app/var/log/dev.log
touch /srv/app/var/log/acceptance.log
touch /srv/app/var/log/production.log

chmod ugo+rwx /srv/app/var/log/dev.log
chmod ugo+rwx /srv/app/var/log/acceptance.log
chmod ugo+rwx /srv/app/var/log/production.log

tail -f /srv/app/var/log/dev.log &
tail -f /srv/app/var/log/acceptance.log &
tail -f /srv/app/var/log/production.log &

nginx
php-fpm -F