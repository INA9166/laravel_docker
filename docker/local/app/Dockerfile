FROM php:8.1-apache

ENV TZ Asia/Tokyo

ADD ./docker/local/app/php.ini /usr/local/etc/php/php.ini
ADD ./docker/local/app/default.conf /etc/apache2/sites-enabled/000-default.conf    

RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

RUN apt-get update \
&& apt-get install -y \
git \
zip \
unzip \
vim \
default-mysql-client \
libpng-dev \
libpq-dev \
&& docker-php-ext-install pdo_mysql

RUN mv /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled
RUN /bin/sh -c a2enmod rewrite

WORKDIR /var/www/html/laravel
