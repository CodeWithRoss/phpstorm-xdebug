FROM php:8.4-apache

# Install Xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

RUN { \
      echo "xdebug.mode=debug,develop"; \
      echo "xdebug.start_with_request=yes"; \
      echo "xdebug.client_host=host.docker.internal"; \
      echo "xdebug.client_port=9003"; \
    } > /usr/local/etc/php/conf.d/99-xdebug.ini

WORKDIR /var/www/html
