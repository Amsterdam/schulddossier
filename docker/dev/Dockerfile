FROM php:8.4.27-fpm-alpine

COPY certificates/adp_rootca.crt /usr/local/share/ca-certificates/adp_rootca.crt
RUN update-ca-certificates

RUN apk add --no-cache \
        icu-dev postgresql-dev libzip-dev libxml2-dev libxslt-dev \
        freetype-dev libpng-dev libjpeg-turbo-dev \
        libreoffice imagemagick git unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j"$(nproc)" \
        pdo_pgsql opcache zip soap intl gd xsl bcmath

RUN apk add --no-cache --virtual .xdebug-build-deps $PHPIZE_DEPS linux-headers \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && apk del .xdebug-build-deps

COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer
COPY docker-phpfpm/php-ini-overrides.ini /usr/local/etc/php/conf.d/app.ini
RUN printf '\nxdebug.start_with_request=trigger\nxdebug.client_port=9003\n' \
        > /usr/local/etc/php/conf.d/xdebug-dev.ini \
    && printf '[www]\npm = ondemand\npm.max_children = 5\npm.process_idle_timeout = 10s\nclear_env = no\n' \
        > /usr/local/etc/php-fpm.d/zz-dev.conf

WORKDIR /var/www
# Source and dependencies are bind-mounted, not baked into this runtime image.
CMD ["php-fpm", "-F"]
