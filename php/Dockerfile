FROM php:7.2-fpm

# Additional tools
RUN apt-get update \
 && apt-get install -y --no-install-recommends \
    curl \
    openssl \
    nano

# Common php-ext and requirements
RUN apt-get install -y --no-install-recommends libpq-dev libz-dev \
 && docker-php-ext-install pdo \
 && docker-php-ext-install mysqli \
 && docker-php-ext-install pdo_mysql

# Instal redis php-ext and requirements
RUN pecl install redis && docker-php-ext-enable redis

# Clear package lists
RUN rm -rf /var/lib/apt/lists/*


# Permissions
RUN chown -R root:www-data /var/www/html
RUN chmod u+rwx,g+rx,o+rx /var/www/html
RUN find /var/www/html -type d -exec chmod u+rwx,g+rx,o+rx {} +
RUN find /var/www/html -type f -exec chmod u+rw,g+rw,o+r {} +

CMD ["php-fpm"]

EXPOSE 9000
