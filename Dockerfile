FROM bitnami/laravel:latest

WORKDIR /app

COPY . /app

RUN composer install

#RUN php artisan key:generate --ansi

#RUN php artisan migrate --seed --force

EXPOSE 8000

CMD ["php", "artisan", "serve"]