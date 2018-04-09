FROM composer:1.5
FROM php:7.1.14-fpm-alpine

EXPOSE 80

RUN apk update \
 && apk upgrade

RUN apk add bash

RUN apk add nginx \
 && mkdir /run/nginx

RUN apk add m4 perl autoconf dpkg-dev libbz2 dpkg libmagic file binutils-libs binutils gmp isl libgomp libatomic mpfr3 mpc1 gcc musl-dev libc-dev g++ make re2c

RUN apk add postgresql-dev libmcrypt libmcrypt-dev libxml2 libxml2-dev \
 && docker-php-ext-install pdo_pgsql pgsql mcrypt opcache
RUN apk add icu-dev icu-libs
RUN docker-php-ext-install intl
RUN docker-php-ext-install dom 
RUN apk add freetype-dev jpeg-dev libpng-dev
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ 
RUN docker-php-ext-install gd
RUN docker-php-ext-install iconv 
RUN docker-php-ext-install mbstring 
RUN docker-php-ext-install xml 
RUN docker-php-ext-install dom
RUN CFLAGS="-I/usr/src/php" docker-php-ext-install xmlreader 
RUN docker-php-ext-install xmlwriter 
RUN docker-php-ext-install zip 

COPY --from=composer:1.5 /usr/bin/composer /usr/bin/composer

WORKDIR /
RUN mkdir /srv/app
COPY . /srv/app
WORKDIR /srv/app

ENV COMPOSER_ALLOW_SUPERUSER 1

RUN composer install --prefer-dist --no-progress --no-suggest --no-scripts
RUN composer dump-autoload --optimize --no-dev --classmap-authoritative

ENTRYPOINT /srv/app/docker-entrypoint.sh
