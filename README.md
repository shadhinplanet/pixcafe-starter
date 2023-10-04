# Laravel Backend Starter Pack

[![Latest Version on Packagist](https://img.shields.io/packagist/v/pixcafe/starter.svg?style=flat-square)](https://packagist.org/packages/pixcafe/starter) [![Total Downloads](https://img.shields.io/packagist/dt/pixcafe/starter.svg?style=flat-square)](https://packagist.org/packages/pixcafe/starter)

The "pixcafe-starter" package will help you get start with your new Laravel project with a awesome backend template. Also, the authentication, basic components will be installed.

## Installation

You can install the package via composer

```bash
composer require pixcafe/starter
```

## Usage
##### Step 1: Publish Template Files
```php
php artisan vendor:publish --tag=pixcafe-starter --force
```
*Note: It will affect your public directory, so make sure you take backup of your existing files.*

##### Step 2: Add backend route file to your "web.php" file
```php
require __DIR__ .'/backend.php';
```

##### Step 3: Add Helper file to your composer.json
in your composer.json file add bellow code inside **autoload:**

```php
"files": [
    "app/Helper/Helper.php"
] 
```
##### Step 4: Dump new file
In your terminal use bellow command to dump the new file

```bash
composer dump-autoload
```
Now visit your site, you'll get new home page and other pages.
*You're done! Enjoy!*

## Credits

- [Shadhin Ahmed](https://github.com/shadhinplanet)
- Pixcafe Team

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Thank you

Feel free to let us know whwat we should implement more!
