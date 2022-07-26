FROM php:8.0.21-fpm-alpine

## Update and install packages+
# RUN echo -e "http://nl.alpinelinux.org/alpine/v3.14/main\nhttp://nl.alpinelinux.org/alpine/v3.14/community" > /etc/apk/repositories
RUN apk update
RUN apk add \
   freetype-dev \
   libjpeg-turbo-dev \
   libpng-dev \
   zip \
   libzip

## Install and configure PHP extensions
RUN docker-php-ext-install -j$(nproc) pdo pdo_mysql  
## && docker-php-ext-install -j$(nproc) zip
# Install system dependencies
# RUN apk add \
#     git \
#     curl \
#     libpng-dev \
#     libonig-dev \
#     libxml2-dev \
#     zip \
#     unzip

# # Clear cache
# RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# # Install PHP extensions
# RUN docker-php-ext-install pdo_mysql pdo
    
WORKDIR /app
