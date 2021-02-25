# Curiotijd

## Requirements

* Composer
* PHP > 7.3.0
* MySQL

## Getting started

1. Run `composer install`
2. Copy `.env.example` to `.env` and configure with database information
3. Run `php artisan key:generate`
4. Run `php artisan migrate --seed` to fill the database with test classes, students and users, all with password `password`
5. Run `php artisan serve`