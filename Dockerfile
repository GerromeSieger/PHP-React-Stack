FROM bitnami/laravel:latest

WORKDIR /app

COPY . /app

RUN composer install

#RUN php artisan key:generate --ansi

RUN php artisan migrate --seed --force

CMD ["php", "artisan", "serve"]