# laravel-books-api

Books API Built in Laravel 5 and using AngularJS for front-end

### Setup application and test

```shell
npm install -g gulp
npm install -g bower
bower install
npm install
php artisan migrate:refresh --seed --force
gulp
php artisan serve --port=8000
vendor/bin/phpunit
```

### Create Laravel 5 project with the following command:

```shell
composer create-project laravel/laravel ~/projects/github/bitclaw/laravel-books-api
php artisan ide-helper:generate
```

### Commands to get database and migrations / seeds setup

```shell
mysql> CREATE DATABASE `books-api` /*!40100 COLLATE 'utf8_general_ci' */;
php artisan migrate:install
php artisan make:migration create_books_table
php artisan make:seeder BooksTableSeeder
php artisan make:seeder InvoicesTableSeeder
php artisan migrate
php artisan db:seed --class=BooksTableSeeder
php artisan db:seed --class=InvoicesTableSeeder
php artisan migrate:refresh --seed
```

### Create controller

```shell
php artisan make:controller Books
```

### Create model

```shell
php artisan make:model Book
```

### Use built-in web server for Laravel App (http://localhost:8000)

```shell
php artisan serve --port=8000
```

### Elixir and Gulp

When making changes to JS files , run gulp in order to get the latest changes in the front-end assets

```shell
gulp
```

### Books API Endpoint

http://localhost:8000/api/v1/books

### Unit tests

Simply run the following command from the shell in the project root directory:

```shell
phpunit
```

### LICENSE

> The MIT License (MIT)
> 
> Copyright (c) 2016 Daniel Chavez
> 
> Permission is hereby granted, free of charge, to any person obtaining a copy
> of this software and associated documentation files (the "Software"), to deal
> in the Software without restriction, including without limitation the rights
> to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
> copies of the Software, and to permit persons to whom the Software is
> furnished to do so, subject to the following conditions:
> 
> The above copyright notice and this permission notice shall be included in all
> copies or substantial portions of the Software.
> 
> THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
> IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
> FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
> AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
> LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
> OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
> SOFTWARE.

