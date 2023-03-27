<?php

use craft\helpers\App;

return [
    'aliases' => [
        '@web' => App::env('CRAFT_BASE_URL')
    ]
];
