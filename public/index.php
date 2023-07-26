<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

use App\User;

$user = new User('Vitaly', 25);

echo "Name: $user->name, Age: $user->age" . PHP_EOL;
