FROM php:7.4-apache

LABEL MAINTAINER=YefryFigueroa EMAIL=yefry@figueroa.it

COPY index.php /var/www/html

WORKDIR /var/www/html

