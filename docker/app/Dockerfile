FROM php:7.4-fpm

ENV COMPOSER_ALLOW_SUPERSUER=1
RUN curl -sS https://getcomposer.org/installer | php -- \
    --filename=composer \
    --install-dir=/usr/local/bin

WORKDIR /var/www/app-delivery