<?php
// TODO: break MONGODB_URI env to username/pass/host/port..

return [
    'connections' => [
        'mongodb' => [
            'driver'   => 'mongodb',
            'host'     => getenv("MONGODB_HOST"),
            'port'     => getenv("MONGODB_PORT"),
            'username' => getenv("MONGODB_USERNAME"),
            'password' => getenv("MONGODB_PASSWORD"),
            'database' => getenv("MONGODB_DATABASE")
        ],
    ]
];
