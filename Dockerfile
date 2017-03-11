FROM ubuntu:16.04

RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get install -y php php-fpm php-mbstring php-mysql php-mcrypt php-xml nginx git curl unzip
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN composer global require "fxp/composer-asset-plugin:^1.2.0"
RUN composer self-update --no-progress
COPY ./nginx.conf /etc/nginx/nginx.conf
COPY ./www.conf /etc/php/7.0/fpm/pool.d