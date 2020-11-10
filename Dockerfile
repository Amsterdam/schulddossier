FROM composer:2.0
FROM php:7.4.12-fpm-alpine

EXPOSE 80

RUN apk update \
 && apk upgrade

RUN apk add bash

RUN apk add nginx \
 && mkdir /run/nginx

RUN apk add m4 perl autoconf dpkg-dev libbz2 dpkg libmagic file binutils gmp isl libgomp libatomic mpc1 gcc musl-dev libc-dev g++ make re2c

RUN apk add postgresql-dev libmcrypt libmcrypt-dev libxml2 libxml2-dev libzip-dev \
 && docker-php-ext-install pdo_pgsql pgsql opcache
RUN pecl install mcrypt-1.0.3 && docker-php-ext-enable mcrypt
RUN apk add icu-dev icu-libs
RUN docker-php-ext-install intl
RUN apk add freetype-dev jpeg-dev libpng-dev
RUN docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/
RUN docker-php-ext-install gd
RUN docker-php-ext-install zip
RUN docker-php-ext-install soap

COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

WORKDIR /
RUN mkdir /srv/app
COPY . /srv/app
WORKDIR /srv/app

ENV COMPOSER_ALLOW_SUPERUSER 1

RUN composer install --prefer-dist --no-progress --no-suggest --no-scripts
RUN composer dump-autoload --optimize --no-dev --classmap-authoritative

ENTRYPOINT /srv/app/docker-entrypoint.sh
