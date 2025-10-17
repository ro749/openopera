<?php

return [
    'tables' => [
        'Torre' => App\Tables\Torre::class,
    ],
    'forms' => [
        'Contact' => App\Forms\Contact::class,
    ],
    'models' => [
        'User' => App\Models\User::class,
        'Unit' => App\Models\Unit::class,
    ],
    'controllers' => [
        'DispoController' => App\Http\Controllers\DispoController::class,
    ],
    'image_map_pro' => App\ImageMapPro\ImageMapPro::class,
    'plans' => App\Plans\Plans::class
];
