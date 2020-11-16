#!/bin/bash


# Build laravel app env
cp .env.example .env

# Build laradock env
cd laradock
cp env-example .env
docker-compose up -d nginx mysql
docker-compose exec workspace composer install
docker-compose exec workspace php artisan key:generate
docker-compose exec workspace php artisan ecommerce:install