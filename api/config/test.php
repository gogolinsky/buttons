<?php

return [
    'id' => 'app-api-tests',
    'components' => [
        'urlManager' => [
            'showScriptName' => true,
            'rules' => [
                'GET /buttons' => '/v1/buttons/index'
            ],
        ],
    ],
];
