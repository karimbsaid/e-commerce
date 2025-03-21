# Étape de construction
FROM composer:2.6 AS builder

WORKDIR /app

COPY database/ database/
COPY package.json package-lock.json vite.config.js ./
COPY resources/ resources/
COPY composer.json composer.lock ./

RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

RUN npm install && npm run build

# Étape finale
FROM php:8.3-fpm-alpine

RUN apk add --no-cache \
    nginx \
    supervisor \
    mysql-client \
    libpng-dev \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo_mysql exif pcntl bcmath gd zip

COPY --from=builder /app /var/www/html
COPY docker/prod/nginx.conf /etc/nginx/nginx.conf
COPY docker/prod/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY .env.production /var/www/html/.env

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
