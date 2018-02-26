<?php
/**
 * Created by ntdinh1987.
 * User: ntdinh1987
 * Date: 12/3/16
 * Time: 1:14 AM
 */

return [
    'host' => env('DATABASE_HOST', 'localhost'),
    'database' => env('DATABASE_NAME', 'vnpf'),
    'username' => env('DATABASE_USERNAME', 'root'),
    'password' => env('DATABASE_PASSWORD', ''),
    'slave' => [
        'host' => env('DATABASE_SLAVE_HOST', 'localhost'),
        'database' => env('DATABASE_SLAVE_NAME', 'vnpf'),
        'username' => env('DATABASE_SLAVE_USERNAME', 'root'),
        'password' => env('DATABASE_SLAVE_PASSWORD', ''),
    ],
    'max_time_slow' => 0.01
];