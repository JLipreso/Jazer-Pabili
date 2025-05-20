<?php

return [
    'database_connection' => [
        'driver'        => 'mysql',
        'host'          => env('CONN_PABILI_IP', config('usersconfig.conn_pabili_ip')),
        'port'          => env('CONN_PABILI_PT', config('usersconfig.conn_pabili_pt')),
        'database'      => env('CONN_PABILI_DB', config('usersconfig.conn_pabili_db')),
        'username'      => env('CONN_PABILI_UN', config('usersconfig.conn_pabili_un')),
        'password'      => env('CONN_PABILI_PW', config('usersconfig.conn_pabili_pw')),
        'charset'       => 'utf8mb4',
        'collation'     => 'utf8mb4_unicode_ci',
        'prefix'        => ''
    ],
];