<p align="center">
    <a href="https://github.com/yii-extension" target="_blank">
        <img src="https://lh3.googleusercontent.com/ehSTPnXqrkk0M3U-UPCjC0fty9K6lgykK2WOUA2nUHp8gIkRjeTN8z8SABlkvcvR-9PIrboxIvPGujPgWebLQeHHgX7yLUoxFSduiZrTog6WoZLiAvqcTR1QTPVRmns2tYjACpp7EQ=w2400" height="100px">
    </a>
    <h1 align="center">Url service</h1>
    <br>
</p>

[![Total Downloads](https://poser.pugx.org/yii-extension/url-service/downloads.png)](https://packagist.org/packages/yii-extension/url-service)
[![static analysis](https://github.com/yii-extension/url-service/workflows/static%20analysis/badge.svg)](https://github.com/yii-extension/url-service/actions?query=workflow%3A%22static+analysis%22)
[![type-coverage](https://shepherd.dev/github/yii-extension/url-service/coverage.svg)](https://shepherd.dev/github/yii-extension/url-service)

## Installation

```shell
composer require yii-extension/url-service
```

## Usages:

You can inject url-service into the controller or action, and automatically all dependencies are resolved by autowired in di-container.

```php
<?php

declare(strict_types=1);

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Yii\Extension\Service\ServiceUrl;

final class Example
{
    public function run(ServiceUrl $serviceUrl): ResponseInterface
    {
        // redirect to `site/index`
        return $serviceUrl->run('site/index');
    }
}
```

### Static analysis

The code is statically analyzed with [Psalm](https://psalm.dev/docs). To run static analysis:

```php
./vendor/bin/psalm
```

### License

The url service for Yii Packages is free software. It is released under the terms of the BSD License.
Please see [`LICENSE`](./LICENSE.md) for more information.

Maintained by [Yii Extension](https://github.com/yii-extension).
