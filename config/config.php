<?php

return [
    /** Project Configurations */
    'project_refid'                 => env('PROJECT_REFID', ''),


    /** Database Connection Configurations */
    'conn_pabili_ip'                 => env('CONN_PABILI_IP', env('DB_HOST')),
    'conn_pabili_pt'                 => env('CONN_PABILI_PT', env('DB_PORT')),
    'conn_pabili_db'                 => env('CONN_PABILI_DB', env('DB_DATABASE')),
    'conn_pabili_un'                 => env('CONN_PABILI_UN', env('DB_USERNAME')),
    'conn_pabili_pw'                 => env('CONN_PABILI_PW', env('DB_PASSWORD')),

    /** Query parameters */
    'fetch_paginate_max'            => env('FETCH_PAGINATE_MAX', 25),
];
