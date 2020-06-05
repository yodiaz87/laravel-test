

## Laravel API
This is a sample api with Laravel, it has authentication and authorization features also CRUD operations
 for notifications entity.
### Requirements:
* PHP7
* Composer

#### Installing the application:
```composer install```

#### Running migrations :
```php artisan migrate:fresh```

#### Install passport keys :
```php artisan passport:install```


#### Running the 100 users seeder :
```php artisan db:seed```

#### Running the application:
```php artisan serve```

#### Running the clear notifications command:
```php artisan clear:notifications```

#### For testing the endpoints you should import the ```laravel.postman_collection.json``` file located in the root of the project(please replace the token with the login return).

### Note:I exported the postman json for testing the api, if you need all the documentation generated I will use laravel-apidoc-generator.

