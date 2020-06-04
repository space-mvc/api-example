# api-example

## Install instructions

1) Run ```git clone https://github.com/space-mvc/api-example.git```

2) Run ```composer install```

3) Create a mysql database

4) Update the database settings inside .env to match your database/host

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

5. Run ```php artisan migrate:refresh --seed``` to migrate the database seeds

6. Setup laravel folder permissions

```sudo chgrp -R www-data storage bootstrap/cache```

```sudo chmod -R ug+rwx storage bootstrap/cache```

--------------------------------------

## Unit Tests

1. Check DB_DATABASE inside phpunit.xml matches your database name

2. Run ```php artisan test```

--------------------------------------

## Postman Collection

There is a postman collection stored inside the /documentation folder

Note when using the time zone parameter use normal php timezones 
as written here - https://www.php.net/manual/en/timezones.php 
yet change the backslash to a dash to insert into the url like this

America-New_York

instead of this

America\New_York



