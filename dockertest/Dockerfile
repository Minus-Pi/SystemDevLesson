FROM php:8.1-fpm-alpine AS php

RUN docker-php-ext-install pdo_mysql

RUN apk add git
RUN git clone https://github.com/phpredis/phpredis.git /usr/src/php/ext/redis
RUN docker-php-ext-install redis

COPY ./php.ini ${PHP_INI_DIR}/php.ini

RUN apk add -U --no-cache curl-dev
RUN docker-php-ext-install curl
RUN docker-php-ext-install exif

#RUN pecl install apcu &&
RUN apk add autoconf g++ make
RUN docker-php-ext-enable apcu

RUN apk add libpng-dev
RUN docker-php-ext-install gd

RUN install -o www-data -g www-data -d /var/www/upload/image/
