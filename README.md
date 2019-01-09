# A Simple Middleware for Laravel Allowing Long Requests

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mydnic/laravel-allow-long-request.svg)](https://packagist.org/packages/mydnic/laravel-allow-long-request)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](LICENSE)
[![Build Status](https://img.shields.io/travis/com/mydnic/laravel-allow-long-request.svg)](https://travis-ci.com/mydnic/laravel-allow-long-request)
[![Code Quality](https://img.shields.io/scrutinizer/g/mydnic/laravel-allow-long-request.svg)](https://scrutinizer-ci.com/g/mydnic/laravel-allow-long-request/)

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
