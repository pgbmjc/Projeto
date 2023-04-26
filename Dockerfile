FROM php:7.2-apache

RUN a2enmod rewrite

COPY ./ /var/www/html/

RUN apt-get update -y && apt-get install -y libmariadb-dev

RUN docker-php-ext-install mysqli

RUN chmod 777 -R /var/www/html/