#FROM php:latest
FROM php:7.3-zts-alpine

RUN apk update
RUN apk add git
RUN git clone https://github.com/krakjoe/pthreads -b master /tmp/pthreads
RUN docker-php-ext-configure /tmp/pthreads --enable-pthreads
RUN docker-php-ext-install /tmp/pthreads
RUN docker-php-ext-install mysqli sockets
#\
#    && a2enmod rewrite \
#    && service apache2 restart
WORKDIR /var/www/html
CMD [ "php", "./stream.php" ]
