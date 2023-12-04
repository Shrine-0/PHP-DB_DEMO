FROM php:8.0-apache
COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html/
RUN apt-get update && apt-get install -y nano
RUN docker-php-ext-install mysqli

