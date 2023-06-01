<?php

declare(strict_types=1);

namespace App;

final class User
{
    public function __construct(
        public readonly string $name,
        public readonly int $age,
    )
    {
    }
}
