<?php
declare(strict_types=1);

namespace App\User;


interface ReadUser
{
    public function getName():string;
    public function getLastName():string;
    public function getEmail():string;
    public function getPassword():string;
}