> **NOTE:** This is a boilerplate to create middleware packages:

> 1. Create a project with composer: `composer create-project middlewares/boilerplate my-middleware`
> 2. Run `php my-middleware/fill.php` to:

>   * replace *boilerplate* references to *my-middleware*
>   * rename the class `Boilerplate` to `MyMiddleware`
>   * remove this note in the `README.md`
>   * remove `fill.php` itself

# middlewares/boilerplate

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
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
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/middlewares/boilerplate.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/middlewares/boilerplate.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/middlewares/boilerplate.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/middlewares/boilerplate
[link-travis]: https://travis-ci.org/middlewares/boilerplate
[link-scrutinizer]: https://scrutinizer-ci.com/g/middlewares/boilerplate/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/middlewares/boilerplate
[link-downloads]: https://packagist.org/packages/middlewares/boilerplate
