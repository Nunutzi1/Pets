
# Laravel Rest API exercise PETS

Project guide and monitoring

- Have PHP 7 onwards
- Run on a server (Example: WAMP) or use composer and run from the following command in the terminal:

```php artisan serve```

- In ".env" indicate the connection to the database (The port, the name of the database, the url and the user data)

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:Iqx9WXm8F+YhkflHMv7pRRVZ6bB+EZBLcBH3AquvO/s=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pets
DB_USERNAME=root
DB_PASSWORD=

```

## Postman

### Get the data

```
GET /pets
200 Ok
```

### Create new pet

```
POST /create {"name": "Perro", "description": "Ejemplo"}
201 Created
```

### Get pet by id

```
GET /pet/{id}
200 OK
```

### Update pet by id

```
PUT /update/{id} {"name": "Perro", "description": "Ejemplo"}
200 OK
```
### Delete pet by id

```
PUT /delete/{id}
200 OK
```

## Unit tests

- Path for unit tests

```tests\Unit\PetsTest.php```

- Write the following command to see the unit tests

```.\vendor\bin\phpunit.bat```