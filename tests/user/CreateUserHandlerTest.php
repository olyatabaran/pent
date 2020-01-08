<?php

declare(strict_types=1);

namespace App\Tests\User;

use PHPUnit\Framework\TestCase;
use App\User\CreateUserCommand;
use App\User\CreateUserHandler;

class CreateUserHandlerTest extends TestCase
{
    public function testCreateUser():void
    {
        $createUserCommand = new CreateUserCommand('First name', 'Last Name', 'email', 'password');

        $userRepository = new UserRepository();

        $userHandler = new CreateUserHandler($createUserCommand, $userRepository );

        $userHandler->handle();

        static::assertEquals(true,  $userRepository->createWasCalled);
        static::assertEquals($createUserCommand->getFirstName(),  $userRepository->user->getFirstName());
        static::assertEquals($createUserCommand->getLastName(),  $userRepository->user->getLastName());
        static::assertEquals($createUserCommand->getEmail(),  $userRepository->user->getEmail());
        static::assertEquals($createUserCommand->getPassword(),  $userRepository->user->getPassword());
    }
}