FROM php:8.0-apache

# Install Mysql
RUN docker-php-ext-install pdo pdo_mysql
COPY tenant-project/ /var/www/html

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install unzip utility and libs needed by zip PHP extension 
RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    unzip
RUN docker-php-ext-install zip

# Ativa rewrite engine
RUN a2enmod rewrite

# Concede permissão para o laravel.log e gera a key
# RUN mkdir -p /var/www/storage/logs && touch /var/www/storage/logs/laravel.log && chmod 777 /var/www/storage/logs/laravel.log && php artisan key:generate
# RUN chown -R www-data:www-data *
# RUN chmod -R ugo+rw storage
# RUN chmod o+w ./storage/ -R

RUN chown -R www-data:www-data * && chmod -R ugo+rw storage && chmod o+w ./storage/ -R