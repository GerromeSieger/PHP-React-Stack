FROM bitnami/laravel:latest

WORKDIR /app

COPY . /app

RUN composer install

RUN php artisan key:generate --ansi

RUN php artisan migrate --seed

CMD ["php", "artisan", "serve"]