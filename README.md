# api-example

## Install instructions

1) git clone https://github.com/space-mvc/api-example.git

2) composer install

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

5. run ```php artisan migrate:refresh --seed``` to migrate the database seeds

