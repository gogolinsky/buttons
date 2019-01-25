<?php

return [
    'components' => [
        'db' => [
            'class' => \yii\db\Connection::class,
            'dsn' => 'sqlite:' . __DIR__ . '/../../databases/sqlite.db',
            'charset' => 'utf8',
        ],
    ],
];
