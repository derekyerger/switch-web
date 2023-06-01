<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\User;

$user = new User('Vitaly', 25);

echo "Name: $user->name, Age: $user->age" . PHP_EOL;
