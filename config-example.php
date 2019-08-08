<?php

return [
  'database' => [
    'name' => 'example',
    'username' => 'user',
    'password' => 'pass',
    'connection' => 'mysql:host=127.0.0.1',
    'options' => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
  ]
];