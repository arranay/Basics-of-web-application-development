FROM php:7.4.3-fpm-alpine

RUN docker-php-ext-install pdo
RUN docker-php-ext-install mysqli pdo_mysql

WORKDIR /var/www

COPY . /var/www

EXPOSE 9000

CMD ["php-fpm"]

