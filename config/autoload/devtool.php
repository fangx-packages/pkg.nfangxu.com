<?php

declare(strict_types=1);

/**
 * Fangx's Packages
 *
 * @link     https://nfangxu.com
 * @document https://pkg.nfangxu.com
 * @contact  nfangxu@gmail.com
 * @author   nfangxu
 * @license  https://pkg.nfangxu.com/license
 */

return [
    'generator' => [
        'amqp' => [
            'consumer' => [
                'namespace' => 'App\\Amqp\\Consumer',
            ],
            'producer' => [
                'namespace' => 'App\\Amqp\\Producer',
            ],
        ],
        'aspect' => [
            'namespace' => 'App\\Aspect',
        ],
        'command' => [
            'namespace' => 'App\\Command',
        ],
        'controller' => [
            'namespace' => 'App\\Controller',
        ],
        'job' => [
            'namespace' => 'App\\Job',
        ],
        'listener' => [
            'namespace' => 'App\\Listener',
        ],
        'middleware' => [
            'namespace' => 'App\\Middleware',
        ],
        'Process' => [
            'namespace' => 'App\\Processes',
        ],
    ],
];
