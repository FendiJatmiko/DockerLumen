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

## test connection with URI Address 

- ``GET api/v1/contact 		==>  to get all the contact data from database``
- ``GET api/v1/contact/{id} 	==>  using method get to read a specific ID ``
- ``POST api/v1/contact/		==>  Post to create new data ``
- ``PUT api/v1/contact/{id}	==>  put method to update by id ``
- ``DELETE api/v1/contact/{id}    ==>  delete method to remove specific value or id ``
