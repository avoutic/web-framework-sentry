# WebFramework Sentry

Sentry instrumentation for WebFramework, providing performance monitoring and tracing capabilities.

## Installation

```bash
composer require web-framework/sentry
```

Make sure the definitions file is included in your project by adding it to `definition_files` in your `config.php` file:

```php
return [
    'definition_files' => [
        '../vendor/avoutic/web-framework/definitions/definitions.php',
        '../vendor/avoutic/web-framework-sentry/definitions/definitions.php',
        'app_definitions.php',
    ],
];
```

## Usage

The module provides Sentry integration for WebFramework, enabling performance monitoring and distributed tracing. It implements the WebFramework Instrumentation interface to track transactions and spans.

To use Sentry for instrumentation you need to add it in your PHP-DI definitions:

```php
<?php

namespace WebFramework;

use DI;

return [
    Core\Instrumentation::class => DI\autowire(Core\SentryInstrumentation::class),
```

## License

This package is proprietary software. All rights reserved. 