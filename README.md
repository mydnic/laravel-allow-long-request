# A Simple Middleware for Laravel Allowing Long Requests

## Installation

You can install this package via composer using this command:

```bash
composer require mydnic/laravel-allow-long-request
```

The package will automatically register itself

You can publish the config-file with:

```bash
php artisan vendor:publish --provider="Mydnic\AllowLongRequests\AllowLongRequestsServiceProvider" --tag="config"
```

## Usage

In your Kernel.php you can register the middleware like this:

```php
protected $routeMiddleware = [
    // ...
    'allow-long-request' => \Mydnic\AllowLongRequests\Http\Middleware\AllowLongRequests::class,
]
```
