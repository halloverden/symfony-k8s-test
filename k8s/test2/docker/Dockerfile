FROM php:7.4-fpm-buster

RUN apt-get update

RUN apt-get install -y acl gettext git libicu-dev libgmp-dev libpng-dev libpq-dev libxml2-dev libzip-dev nano unzip zlib1g-dev libonig-dev
RUN docker-php-ext-configure intl
RUN docker-php-ext-install intl
RUN docker-php-ext-install bcmath gd gmp json mbstring pcntl pdo pdo_mysql posix xml zip

# Install Composer
RUN curl https://getcomposer.org/composer-stable.phar -o /usr/bin/composer && chmod +x /usr/bin/composer

# Set timezone
RUN rm /etc/localtime
RUN ln -s /usr/share/zoneinfo/Europe/Oslo /etc/localtime
RUN "date"

WORKDIR /var/www/symfony

COPY . .

RUN /usr/bin/composer install --no-dev --optimize-autoloader
