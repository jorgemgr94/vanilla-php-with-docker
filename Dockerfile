FROM php:7.2.2-apache

RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo pdo_mysql

COPY ./ /var/www/html/
COPY ./config/php.ini-production /usr/local/etc/php/conf.d/custom.ini