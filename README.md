# Filament plugin for chuckcms/laravel-contacts

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ngoubaux/filament-laravel-contacts.svg?style=flat-square)](https://packagist.org/packages/ngoubaux/filament-laravel-contacts)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ngoubaux/filament-laravel-contacts/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/ngoubaux/filament-laravel-contacts/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ngoubaux/filament-laravel-contacts/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ngoubaux/filament-laravel-contacts/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ngoubaux/filament-laravel-contacts.svg?style=flat-square)](https://packagist.org/packages/ngoubaux/filament-laravel-contacts)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require ngoubaux/filament-laravel-contacts
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-laravel-contacts-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-laravel-contacts-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-laravel-contacts-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentLaravelContacts = new goubs\FilamentLaravelContacts();
echo $filamentLaravelContacts->echoPhrase('Hello, goubs!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Nicolas Goubaux](https://github.com/ngoubaux)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
