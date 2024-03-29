This is a skeleton to create packages implementing [PSR-15](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-15-request-handlers.md) using composer:

```sh
composer create-project middlewares/skeleton my-middleware
```

---

# middlewares/skeleton

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
![Testing][ico-ga]
[![Total Downloads][ico-downloads]][link-downloads]

Description of the middleware

## Requirements

* PHP >= 7.2
* A [PSR-7 http library](https://github.com/middlewares/awesome-psr15-middlewares#psr-7-implementations)
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

## Usage

### option1

Option description

### option2

Option description

---

Please see [CHANGELOG](CHANGELOG.md) for more information about recent changes and [CONTRIBUTING](CONTRIBUTING.md) for contributing details.

The MIT License (MIT). Please see [LICENSE](LICENSE) for more information.

[ico-version]: https://img.shields.io/packagist/v/middlewares/skeleton.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-ga]: https://github.com/middlewares/skeleton/workflows/testing/badge.svg
[ico-downloads]: https://img.shields.io/packagist/dt/middlewares/skeleton.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/middlewares/skeleton
[link-downloads]: https://packagist.org/packages/middlewares/skeleton
