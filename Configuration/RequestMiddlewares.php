<?php

use Topwire\Middleware\TopwireContextResolver;
use Topwire\Middleware\TopwireFormResponseFix;
use Topwire\Middleware\TopwireRendering;

return [
    'frontend' => [
        'helhum/topwire-form-response-fix' => [
            'target' => TopwireFormResponseFix::class,
            'description' => '',
            'before' => [
                'typo3/cms-frontend/timetracker',
            ],
        ],
        'helhum/topwire-context-resolver' => [
            'target' => TopwireContextResolver::class,
            'description' => '',
            'after' => [
                'typo3/cms-frontend/page-resolver',
            ],
            'before' => [
                'typo3/cms-frontend/tsfe',
            ],
        ],
        'helhum/topwire-rendering' => [
            'target' => TopwireRendering::class,
            'description' => '',
            'after' => [
                'typo3/cms-frontend/prepare-tsfe-rendering',
            ],
        ],
    ],
];
