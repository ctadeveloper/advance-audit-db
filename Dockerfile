FROM php:7.4-fpm

RUN docker-php-ext-install pdo pdo_mysql 

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

# Get latest Composer
COPY --from=composer /usr/bin/composer /usr/bin/composer