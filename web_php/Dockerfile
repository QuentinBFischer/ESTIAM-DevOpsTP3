FROM php:7.2-apache

ADD ./config/php.ini /usr/local/etc/php/php.ini
ADD ./web_php/config/apache-config.conf /etc/apache2/sites-available/000-default.conf
ADD ./apache-config.conf /etc/apache2/sites-enabled/webapp.conf

WORKDIR /app
RUN apt-get update
RUN apt-get upgrade -y
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite

EXPOSE 80