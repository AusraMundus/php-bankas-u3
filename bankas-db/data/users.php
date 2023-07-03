<?php

$users = [
    ['name' => 'Darbuotojas', 'email' => 'darbuotojas@bankas.test', 'password' => md5('123456')],
    ['name' => 'Ausra', 'email' => 'ausra@bankas.test', 'password' => md5('123')]
];

file_put_contents(__DIR__ . '/users.json', json_encode($users));

echo "\n users.json created \n";