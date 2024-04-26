FROM php:8.3-apache

LABEL maintainer="andreus.sala@gmail.com"
LABEL application="hello-world"

RUN pecl install xdebug-3.3.2
RUN docker-php-ext-enable xdebug
RUN docker-php-ext-install pdo pdo_mysql

ENV DISPLAY_ERRORS="On"

COPY php.ini /usr/local/etc/php/php.ini
COPY index.php /var/www/html/
