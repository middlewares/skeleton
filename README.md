This is a skeleton to create packages implementing [PSR-15](https://github.com/http-interop/http-server-middleware) using composer:

```sh
composer create-project middlewares/skeleton my-middleware
```

---

# middlewares/skeleton

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-travis]][link-travis]
[![Quality Score][ico-scrutinizer]][link-scrutinizer]
[![Total Downloads][ico-downloads]][link-downloads]
[![SensioLabs Insight][ico-sensiolabs]][link-sensiolabs]

Description of the middleware

## Requirements

* PHP >= 7.0
* A [PSR-7](https://packagist.org/providers/psr/http-message-implementation) http mesage implementation ([Diactoros](https://github.com/zendframework/zend-diactoros), [Guzzle](https://github.com/guzzle/psr7), [Slim](https://github.com/slimphp/Slim), etc...)
* A [PSR-15 middleware dispatcher](https://github.com/middlewares/awesome-psr15-middlewares#dispatcher)

## Installation

This package is installable and autoloadable via Composer as [middlewares/skeleton](https://packagist.org/packages/middlewares/skeleton).

```sh
composer require middlewares/skeleton
```

## Example

```php
$dispatcher = new Dispatcher([
	(new Middlewares\Skeleton())
		->option1()
		->option2($value)
]);

$response = $dispatcher->dispatch(new ServerRequest());
```

## Options

#### `option1()`

Option description

#### `option2($arg)`

Option description

---

Please see [CHANGELOG](CHANGELOG.md) for more information about recent changes and [CONTRIBUTING](CONTRIBUTING.md) for contributing details.

The MIT License (MIT). Please see [LICENSE](LICENSE) for more information.

[ico-version]: https://img.shields.io/packagist/v/middlewares/skeleton.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/middlewares/skeleton/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/g/middlewares/skeleton.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/middlewares/skeleton.svg?style=flat-square
[ico-sensiolabs]: https://img.shields.io/sensiolabs/i/36786f5a-2a15-4399-8817-8f24fcd8c0b4.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/middlewares/skeleton
[link-travis]: https://travis-ci.org/middlewares/skeleton
[link-scrutinizer]: https://scrutinizer-ci.com/g/middlewares/skeleton
[link-downloads]: https://packagist.org/packages/middlewares/skeleton
[link-sensiolabs]: https://insight.sensiolabs.com/projects/36786f5a-2a15-4399-8817-8f24fcd8c0b4
