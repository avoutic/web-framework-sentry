<?php

namespace WebFramework\Sentry;

use DI;
use Psr\Container\ContainerInterface;
use Sentry\ClientInterface;
use WebFramework\Diagnostics\Instrumentation;

return [
    ClientInterface::class => function (ContainerInterface $container) {
        $factory = $container->get(SentryClientFactory::class);
        $options = $container->get('sentry_options');

        return $factory->get($options);
    },

    Instrumentation::class => DI\get(SentryInstrumentation::class),
];
