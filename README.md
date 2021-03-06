# api-example

## Install instructions

1) Run ```git clone https://github.com/space-mvc/api-example.git```

2) Run ```composer install```

3) Create a virtual host as http://local.api.com to match postman urls

4) Create a mysql database as api_explorer

5) Update the database settings inside .env to match your database/host

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=api_explorer
DB_USERNAME=root
DB_PASSWORD=root
```

6. Run ```php artisan migrate:refresh --seed``` to migrate the database seeds

7. Setup laravel folder permissions

```sudo chgrp -R www-data storage bootstrap/cache```

```sudo chmod -R ug+rwx storage bootstrap/cache```

--------------------------------------

## Unit Tests

1. Check DB_DATABASE inside phpunit.xml matches your database name

2. Run ```php artisan test```

All test files are located inside the /tests/Feature folder

--------------------------------------

## Postman Collection

There is a postman collection stored inside the /documentation folder

Note when using the time zone parameter use normal php timezones 
as written here - https://www.php.net/manual/en/timezones.php 


You need to change the forward slash to a dash to insert into the url like this
to make the timezone url friendly

Use this format

America-New_York

instead of this

America/New_York


## Mysql Workbench

There is a mysql workbench file stored inside the /documentation folder

## For best testing purposes

It would be a good idea to take a look at the seed data to get an idea of what is queryable via the api

Please feel free to add more seed data
