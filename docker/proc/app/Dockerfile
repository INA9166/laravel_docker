FROM php:8.1-apache

ENV TZ Asia/Tokyo

ADD ./php.ini /usr/local/etc/php/php.ini
ADD ./default.conf /etc/apache2/sites-enabled/000-default.conf
ADD ./src/laravel /var/www/html/laravel

RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

# 作業ディレクトリを変更
WORKDIR /var/www/html/laravel

RUN apt-get update \
&& apt-get install -y \
git \
zip \
unzip \
vim \
default-mysql-client \
libpng-dev \
libpq-dev \
&& docker-php-ext-install pdo_mysql \
&& chmod 777 storage -R \
&& chmod 777 bootstrap/cache -R

RUN mv /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled
RUN /bin/sh -c a2enmod rewrite

EXPOSE 8080

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_NO_INTERACTION 1

RUN composer install \
&& php artisan cache:clear \
&& php artisan config:clear \
&& php artisan route:clear \
&& php artisan view:clear
