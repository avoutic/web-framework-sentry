<?php

namespace WebFramework;

use Psr\Container\ContainerInterface;
use Sentry\ClientInterface;
use WebFramework\Sentry\SentryClientFactory;

return [
    ClientInterface::class => function (ContainerInterface $container) {
        $factory = $container->get(SentryClientFactory::class);
        $options = $container->get('sentry_options');

        return $factory->get($options);
    },
];
