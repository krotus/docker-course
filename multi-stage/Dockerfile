FROM composer as backend
WORKDIR /app

COPY composer.json composer.lock /app/
RUN composer install \
	--ignore-platform-reqs \
	--no-ansi \
	--no-autoloader \
	--no-dev \
	--no-interaction \
	--no-scripts

copy . /app/
RUN composer dump-autoload --no-dev --optimize --classmap-authoritative

FROM php:8.3-apache

RUN pecl install xdebug-3.3.2 \
	&& docker-php-ext-enable xdebug \
	&& docker-php-ext-install pdo pdo_mysql

WORKDIR /app
COPY --from=backend /app/ /var/www/html/
COPY php.ini /usr/local/etc/php/php.ini
