FROM php:8.3.0-apache
ARG DEBIAN_FRONTEND=noninteractive
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt update \ 
    && apt install libzip-dev zlib1g-dev -y \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install zip
RUN a2enmod rewrite