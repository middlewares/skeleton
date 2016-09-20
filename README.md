> **NOTE:** This is a boilerplate to create middleware packages:
>
> ```sh
> composer create-project --stability=dev middlewares/boilerplate my-middleware
> ```
>
> What does this?
>
> 1. Create a new middleware package named `my-middleware` using composer
> 2. Edit README.md, composer.json and other files to use `middlewares/my-middleware` as package name
> 3. Rename the middleware class to `MyMiddleware`
> 4. Remove this note in the `README.md`

# middlewares/boilerplate

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Quality Score][ico-scrutinizer]][link-scrutinizer]
[![Total Downloads][ico-downloads]][link-downloads]

Description of the middleware

## Installation

This package is installable and autoloadable via Composer as [middlewares/boilerplate](https://packagist.org/packages/middlewares/boilerplate).

```sh
composer require middlewares/boilerplate
```

## Example

```php
$dispatcher = new Psr15Dispatcher([
	(new Middlewares\Boilerplate())
		->option1()
		->option2($value)
]);

$response = $dispatcher->dispatch(new Request());
```

## Options

#### `option1()`

Option description

#### `option2($arg)`

Option description

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information about recent changes.

## Testing

```sh
composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [LICENSE](LICENSE) for more information.

[ico-version]: https://img.shields.io/packagist/v/middlewares/boilerplate.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/middlewares/boilerplate/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/g/middlewares/boilerplate.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/middlewares/boilerplate.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/middlewares/boilerplate
[link-travis]: https://travis-ci.org/middlewares/boilerplate
[link-scrutinizer]: https://scrutinizer-ci.com/g/middlewares/boilerplate
[link-downloads]: https://packagist.org/packages/middlewares/boilerplate
