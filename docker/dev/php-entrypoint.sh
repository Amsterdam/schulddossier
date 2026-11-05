#!/bin/sh
set -eu

mkdir -p var/cache var/log var/data/dossiers var/tmp public/localworkingstorage/dossier
composer install --prefer-dist --no-interaction --no-progress --no-scripts
php bin/console assets:install public

exec php-fpm -F
