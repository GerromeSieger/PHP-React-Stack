#!/bin/sh

php artisan key:generate --ansi

php artisan migrate --seed --force

php artisan serve --host=0.0.0.0 --port=8000