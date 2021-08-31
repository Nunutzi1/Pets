
## Laravel Rest API exercise PETS

Project guide and monitoring

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

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[CMS Max](https://www.cmsmax.com/)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
