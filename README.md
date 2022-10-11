# Todos made in Laravel

A simple Todo app made in Laravel.

## Installation

Clone the repository:

	git clone git@github.com:aguirre-ivan/todos-laravel.git

cd into `todos-project` folder:

	cd todos-laravel/todos-project

Change the permissions:

	sudo chmod 755 . -R

Copy `.env.example` file to `.env.`:

	cp .env.example .env

Install project dependencies with composer:

	composer install

Generate the app key with artisan:

	php artisan key:generate

## Run server

This project is made with [bitnami/laravel](https://hub.docker.com/r/bitnami/laravel/) image.

Just build the project with docker compose:

	docker compose up -d

Do the database migrations:

	docker exec -i todos-laravel-server php artisan migrate

Now you can go to [http://localhost:8001/todos](http://localhost:8001/todos) with your browser.

