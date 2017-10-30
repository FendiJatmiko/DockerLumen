 ## set up database
 change configuration `.env`

 ```APP_ENV=local
APP_DEBUG=true
APP_KEY=
APP_TIMEZONE=UTC

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=DATABASE
DB_USERNAME=ROOT
DB_PASSWORD=PASSWORD

CACHE_DRIVER=file
QUEUE_DRIVER=sync  
```

## Setup
- `composer update && composer install`
- `php artisan migrate`
- `php artisan db:seed --class=ContactSeeder`

## if u want to run artisan from docker container use the following command

- docker-compose exec app php artisan migrate
- docker-compose exec app php artisan db:seed --class=ContactSeeder
