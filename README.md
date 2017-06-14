## Laravel DarkSky
[![Latest Stable Version](https://poser.pugx.org/naughtonium/laravel-dark-sky/v/stable)](https://packagist.org/packages/naughtonium/laravel-dark-sky)
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads](https://poser.pugx.org/naughtonium/laravel-dark-sky/downloads)](https://packagist.org/packages/naughtonium/laravel-dark-sky)

This provides a Laravel style wrapper for the DarkSky api. For more information regarding request and response formats, visit: https://darksky.net/dev/docs


### Install

Require this package with composer using the following command:

``` bash
$ composer require naughtonium/laravel-dark-sky
```


After updating composer, add the service provider to the `providers` array in `config/app.php`

```php
Naughtonium\LaravelDarkSky\LaravelDarkSkyServiceProvider::class,
```

### Configuration

Add the following line to the .env file:

```sh
DARKSKY_API_KEY=<your_darksky_api_key>
```

### Usage

``` php
$skeleton = new Naughtonium\LaravelDarkSky();
echo $skeleton->echoPhrase('Hello, League!');
```

### Credits

- [Jack Naughton][link-author]
- [All Contributors][link-contributors]

### License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[link-author]: https://github.com/holiehandgrenade
[link-contributors]: ../../contributors
