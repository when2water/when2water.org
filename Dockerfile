FROM php:5-apache

RUN useradd when2water --uid 1000
ENV APACHE_RUN_USER=#1000

COPY php.ini /usr/local/etc/php/
COPY . /var/www/html
