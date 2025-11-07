<?php

namespace WebFramework\Sentry;

use Psr\Container\ContainerInterface;
use Sentry\ClientInterface;

return [
    ClientInterface::class => function (ContainerInterface $container) {
        $factory = $container->get(SentryClientFactory::class);
        $options = $container->get('sentry_options');

        return $factory->get($options);
    },
];
