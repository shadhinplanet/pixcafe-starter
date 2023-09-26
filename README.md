# Laravel Dashboard Starter Pack

[![Latest Version on Packagist](https://img.shields.io/packagist/v/pixcafe/starter.svg?style=flat-square)](https://packagist.org/packages/pixcafe/starter)
[![Total Downloads](https://img.shields.io/packagist/dt/pixcafe/starter.svg?style=flat-square)](https://packagist.org/packages/pixcafe/starter)

The "Starter" package will help you get start with your new Laravel project with a awesome backend template. Also, the authentication, roles and user management will be installed.

## Installation

You can install the package via composer:

```bash
composer require pixcafe/starter
```

## Usage

```php
php artisan vendor:publish --tag=pixcafe-starter --force
```

*Note: It will affect your web.php (route), so make sure you take backup of your existing web.php file.*

## Route Init
In your web.php add bellow code to the end of the file.
```php
require __DIR__ .'/backend.php';
```

### Changelog

Please see [Changelog](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [Contributing](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email shadhinplanet@gmail.com instead of using the issue tracker.

## Credits

- [Shadhin Ahmed](https://github.com/pixcafe)
- Pixcafe Team

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Thank you

Feel free to let us know whwat we should implement more!
