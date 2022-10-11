# Todos made in Laravel

A simple Todo app made in Laravel.

## Installation

Clone the repository 

	git clone git@github.com:aguirre-ivan/todos-laravel.git

Cd into `todos-project` folder

	cd todos-laravel/todos-project

Copy `.env.example` file to `.env.`:

	cp .env.example .env

Install project dependencies with composer:

	composer install

Do a database migration:

	php artisan migrate

Generate the app key with artisan:

	php artisan key:generate

## Run server

This project is made with [bitnami/laravel](https://hub.docker.com/r/bitnami/laravel/) image.

Just build the project with docker compose

	docker compose up -d

Now you can go to [http://localhost:8001/todos]() with your browser.

