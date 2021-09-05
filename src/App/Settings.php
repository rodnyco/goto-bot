<?php
declare(strict_types=1);

$env = getenv('ENVIRONMENT');
if ($env === 'production') {
    $url = getenv('JAWSDB_MARIA_URL');
    $dbparts = parse_url($url);
    $hostname = $dbparts['host'];
    $username = $dbparts['user'];
    $password = $dbparts['pass'];
    $database = ltrim($dbparts['path'],'/');
    return [
        'db' => [
            'host' => $dbparts['host'],
            'name' => $database,
            'user' => $dbparts['user'],
            'pass' => $dbparts['pass'],
        ]
    ];
} else {
    return [
        'db' => [
            'host' => 'mysql',
            'name' => 'main',
            'user' => 'root',
            'pass' => 'root',
        ]
    ];
}