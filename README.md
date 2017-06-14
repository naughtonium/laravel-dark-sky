# Laravel DarkSky
[![Latest Stable Version](https://poser.pugx.org/naughtonium/laravel-dark-sky/v/stable)](https://packagist.org/packages/naughtonium/laravel-dark-sky)
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads](https://poser.pugx.org/naughtonium/laravel-dark-sky/downloads)](https://packagist.org/packages/naughtonium/laravel-dark-sky)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practises by being named the following.

```
bin/        
config/
src/
tests/
vendor/
```


## Install

Require this package with composer using the following command:

``` bash
$ composer require naughtonium/laravel-dark-sky
```


After updating composer, add the service provider to the `providers` array in `config/app.php`

```php
Naughtonium\LaravelDarkSky\LaravelDarkSkyServiceProvider::class,
```

## Configuration

Add the following line to the .env file:

```sh
DARKSKY_API_KEY=<your_darksky_api_key>
```

## Usage

``` php
$skeleton = new Naughtonium\LaravelDarkSky();
echo $skeleton->echoPhrase('Hello, League!');
```

## Credits

- [Jack Naughton][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/https://github.com/naughtonium/laravel-dark-sky/laravel-dark-sky.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/https://github.com/naughtonium/laravel-dark-sky/laravel-dark-sky/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/https://github.com/naughtonium/laravel-dark-sky/laravel-dark-sky.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/https://github.com/naughtonium/laravel-dark-sky/laravel-dark-sky.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/https://github.com/naughtonium/laravel-dark-sky/laravel-dark-sky.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/https://github.com/naughtonium/laravel-dark-sky/laravel-dark-sky
[link-travis]: https://travis-ci.org/https://github.com/naughtonium/laravel-dark-sky/laravel-dark-sky
[link-scrutinizer]: https://scrutinizer-ci.com/g/https://github.com/naughtonium/laravel-dark-sky/laravel-dark-sky/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/https://github.com/naughtonium/laravel-dark-sky/laravel-dark-sky
[link-downloads]: https://packagist.org/packages/https://github.com/naughtonium/laravel-dark-sky/laravel-dark-sky
[link-author]: https://github.com/holiehandgrenade
[link-contributors]: ../../contributors
