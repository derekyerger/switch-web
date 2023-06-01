FROM php:8.2-fpm

MAINTAINER Pestrich <bnm9229bnm@yandex.ru>

# Clear working directory
RUN rm -rf /var/www && mkdir -p /var/www

# Set working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    curl

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN pecl install mongodb && docker-php-ext-enable mongodb

# Copy composer.lock and composer.json
COPY ./composer.* ./

# Copy composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Composer install
RUN composer install --no-progress --no-interaction --no-scripts --no-cache

# Hack: link 'sh' to 'bash'
RUN ln -sf /bin/bash /bin/sh

CMD ["php-fpm"]
