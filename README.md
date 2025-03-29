# WebFramework Sentry

Sentry instrumentation for WebFramework, providing performance monitoring and tracing capabilities.

## Installation

```bash
composer require web-framework/sentry
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