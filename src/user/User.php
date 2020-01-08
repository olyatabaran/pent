<?php

declare(strict_types=1);

namespace App\User;


Interface User
{
    public function __construct(string $firstName,  string $lastName, string $email, string $password);
}